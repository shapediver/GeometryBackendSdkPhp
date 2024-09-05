<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Event\Code\Throwable;
use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\ApiException;
use ShapeDiver\GeometryApiV2\Client\Api\ModelStateApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqFileDefinition;
use ShapeDiver\GeometryApiV2\Client\Model\ResParameterType;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModelState;
use ShapeDiver\GeometryApiV2\Client\Model\ReqParameterValue;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;
use ShapeDiver\GeometryApiV2\SdUtils;

require_once __DIR__ . '/config.php';

class ModelStateApiTest extends TestCase
{
    public function testBasicModelState(): void
    {
        global $host;
        global $jwtBackend;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $resSession = (new SessionApi($client, $config))->createSessionByTicket($ticket);
        $this->assertNotNull($resSession->getParameters());
        $sessionId = $resSession->getSessionId();

        // The value of the first string parameter will be overwritten by the Model-State.
        $strParam = array_filter(array_values($resSession->getParameters()), function ($param) {
            return $param->getType() == ResParameterType::STRING;
        });
        $this->assertNotEmpty($strParam);

        $customParamId = $strParam[array_key_first($strParam)]->getId();
        $customParamValue = TestUtils::now();
        $customData = ["foo" => "bar"];

        // Create a new Model-State.
        $reqModelState = (new ReqModelState())
            ->setParameters([
                $customParamId => (new ReqParameterValue())->setValue($customParamValue)
            ])
            ->setData($customData);
        $resModelState = (new ModelStateApi($client, $config))
            ->createModelState($sessionId, $reqModelState);
        $modelStateId = $resModelState->getModelState()->getId();

        // Check if the Model-State was created successfully.
        $resMetadata = (new ModelStateApi($client, $config))
            ->getModelStateMetadataWithHttpInfo($modelStateId);
        $this->assertEquals($resMetadata[1], 200);

        // Fetch all available information of the Model-State.
        $resModelStateInfo = (new ModelStateApi($client, $config))->getModelState($modelStateId);
        $this->assertEquals(
            $resModelStateInfo->getModelState()->getParameters()[$customParamId]->getValue(),
            $customParamValue
        );
        $this->assertEquals($resModelStateInfo->getModelState()->getData(), $customData);
        $this->assertNull($resModelStateInfo->getModelState()->getImageUrl());

        // Fetch only parameters and data of the Model-State.
        $resModelStateInfo = (new ModelStateApi($client, $config))
            ->getModelStateData($modelStateId);
        $this->assertEquals(
            $resModelStateInfo->getModelState()->getParameters()[$customParamId]->getValue(),
            $customParamValue
        );
        $this->assertEquals($resModelStateInfo->getModelState()->getData(), $customData);

        // Check if the Model-State has an image.
        try {
            (new ModelStateApi($client, $config))
                ->getModelStateImageMetadataWithHttpInfo($modelStateId);
            $this->assertTrue(false, 'Expected ApiException not raised');
        } catch (ApiException) {
            // That's what we except
        } catch (Throwable) {
            $this->assertTrue(false, 'Exception fo wrong type raised');
        }

        // Fetch all Model-States of a model.
        $resList = (new ModelStateApi($client, $backendConfig))
            ->listModelStates($resModelState->getModelState()->getModelId());
        $this->assertNotEmpty($resList->getList()->getModelState());

        // Delete the Model-State.
        (new ModelStateApi($client, $backendConfig))->deleteModelState($modelStateId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testModelStateWithImage(): void
    {
        global $host;
        global $jwtBackend;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $resSession = (new SessionApi($client, $config))->createSessionByTicket($ticket);
        $sessionId = $resSession->getSessionId();

        $fpath = "test/data/logo.jpg";
        $fsize = filesize($fpath);
        $f = fopen($fpath, "r") or die("Unable to open file!");

        # Create a new Model-State and request an image upload.
        $reqModelState = (new ReqModelState())
            ->setParameters([])
            ->setImage(
                (new ReqFileDefinition())
                    ->setFilename("ShapeDiver_Logo.jpg")
                    ->setFormat("image/jpeg")
                    ->setSize($fsize)
            );
        $resModelState = (new ModelStateApi($client, $config))
            ->createModelState($sessionId, $reqModelState);
        $this->assertNotNull($resModelState->getAsset());
        $this->assertNotNull($resModelState->getAsset()->getModelState());
        $modelStateId = $resModelState->getModelState()->getId();
        $image = $resModelState->getAsset()->getModelState();

        // Upload the image.
        $resUpload = SdUtils::uploadAsset($image->getHref(), $f, $image->getHeaders());
        $this->assertEquals($resUpload->getStatusCode(), 200);

        // Check if the Model-State has an image.
        $resImageMetadata = (new ModelStateApi($client, $config))
            ->getModelStateImageMetadataWithHttpInfo($modelStateId);
        $this->assertEquals($resImageMetadata[1], 200);

        // Download the uploaded image.
        $resImage = (new ModelStateApi($client, $config))->downloadModelStateImage($modelStateId);
        $this->assertEquals(filesize($resImage->getPathname()), $fsize);

        // Fetch all available information of the Model-State.
        $resModelStateInfo = (new ModelStateApi($client, $config))->getModelState($modelStateId);
        $this->assertNotNull($resModelStateInfo->getModelState()->getParameters());
        $this->assertNull($resModelStateInfo->getModelState()->getData());
        $this->assertNotNull($resModelStateInfo->getModelState()->getImageUrl());

        // Delete the Model-State.
        (new ModelStateApi($client, $backendConfig))->deleteModelState($modelStateId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
