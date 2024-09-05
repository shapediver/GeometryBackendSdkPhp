<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\ArSceneApi;
use ShapeDiver\GeometryApiV2\Client\Api\GltfApi;
use ShapeDiver\GeometryApiV2\Client\Api\ModelStateApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\QueryGltfConversion;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModelState;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class ArSceneApiTest extends TestCase
{
    public function testMetadataAndDownloads(): void
    {
        global $host;

        $client = new SdClient();
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $config))
            ->createSessionByTicket($ticket)
            ->getSessionId();

        $fpath = "test/data/Box.glb";
        $f = fopen($fpath, "r") or die("Unable to open file!");

        // Create AR scene from glTF file.
        $resUpload = (new GltfApi($client, $config))
            ->uploadGltf($sessionId, $f, QueryGltfConversion::SCENE);
        $this->assertNotNull($resUpload->getGltf()->getSceneId());

        $sceneId = $resUpload->getGltf()->getSceneId();

        // Get metadata of an existing AR scene.
        $resMetadata = (new ArSceneApi($client, $config))->getArSceneMetadataWithHttpInfo($sceneId);
        $this->assertEquals($resMetadata[1], 200);

        // Download the created AR scene as glTF.
        $resGltf = (new ArSceneApi($client, $config))->downloadArSceneGltf($sceneId);
        $this->assertGreaterThan(0, $resGltf->getSize());

        // Download the created AR scene as USDZ.
        $resUsdz = (new ArSceneApi($client, $config))->downloadArSceneUsdz($sceneId);
        $this->assertGreaterThan(0, $resUsdz->getSize());

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testModelStateFromArScene(): void
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

        $fpath = "test/data/Box.glb";
        $f = fopen($fpath, "r") or die("Unable to open file!");

        // Create AR scene from glTF file.
        $resUpload = (new GltfApi($client, $config))
            ->uploadGltf($sessionId, $f, QueryGltfConversion::SCENE);
        $this->assertNotNull($resUpload->getGltf()->getSceneId());

        // Create minimal Model-State from AR scene.
        $reqModelState = (new ReqModelState())
            ->setParameters([])
            ->setArSceneId($resUpload->getGltf()->getSceneId());
        $resModelState = (new ModelStateApi($client, $config))
            ->createModelState($sessionId, $reqModelState);
        $modelStateId = $resModelState->getModelState()->getId();

        // Get metadata of the Model-State's AR scene.
        $resMetadata = (new ArSceneApi($client, $config))
            ->getArSceneMetadataWithHttpInfo($modelStateId);
        $this->assertEquals($resMetadata[1], 200);

        // Download the created Model-State's AR scene as glTF.
        $resGltf = (new ArSceneApi($client, $config))->downloadArSceneGltf($modelStateId);
        $this->assertGreaterThan(0, $resGltf->getSize());

        // Download the created Model-State's AR scene as USDZ.
        $resUsdz = (new ArSceneApi($client, $config))->downloadArSceneUsdz($modelStateId);
        $this->assertGreaterThan(0, $resUsdz->getSize());

        // Delete the Model-State.
        (new ModelStateApi($client, $backendConfig))->deleteModelState($modelStateId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
