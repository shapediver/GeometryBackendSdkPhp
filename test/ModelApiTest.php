<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\ApiException;
use ShapeDiver\GeometryApiV2\Client\Api\ModelApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\QueryComputationStatisticsStatus;
use ShapeDiver\GeometryApiV2\Client\Model\QueryModelStatus;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModel;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class ModelApiTest extends TestCase
{
    use \Codeception\AssertThrows;

    public function testModelConfig(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Fetch the model configuration.
        $resConfig = (new ModelApi($client, $modelConfig))->getModelConfig($modelId);
        $this->assertNotEmpty($resConfig->getViewer()->getConfig());

        // Update the model configuration. However, for the sake of simplicity, we will re-use the
        // already existing configuration object.
        (new ModelApi($client, $modelConfig))
            ->updateModelConfig($modelId, $resConfig->getViewer()->getConfig());
    }

    public function testModel(): void
    {
        global $host;
        global $jwtBackend;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Fetch a model.
        $resGet = (new ModelApi($client, $modelConfig))->getModel($modelId);
        $this->assertEquals($resGet->getModel()->getId(), $modelId);

        // Download the model's Grasshopper file.
        $resGh = (new ModelApi($client, $modelConfig))->downloadModelFile($modelId);
        $this->assertNotEquals(filesize($resGh->getPathname()), 0);

        // Get the model's computation statistics by status.
        $resComp = (new ModelApi($client, $modelConfig))->getModelComputations(
            $modelId,
            timestampFrom: '20240614155603054',
            timestampTo: '20240627072220908',
            status: QueryComputationStatisticsStatus::SUCCESS
        );
        $this->assertGreaterThanOrEqual(count($resComp->getComputations()), 0);

        // Update a model.
        $reqUpdate = new ReqModel(['pub' => true, 'backendaccess' => true, 'useCdn' => true]);
        $resUpdate = (new ModelApi($client, $backendConfig))->updateModel($modelId, $reqUpdate);
        $this->assertEquals($resUpdate->getModel()->getId(), $modelId);

        // List all models with a specific status.
        $resList = (new ModelApi($client, $backendConfig))
            ->listModels(QueryModelStatus::DENIED);
        $this->assertNotEmpty($resList->getList()->getModel());
    }

    public function testCleanup(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $modelApi = new ModelApi($client, $modelConfig);

        // Trigger an export cleanup.
        $modelApi->cleanupExports($modelId, "2024");

        // Trigger an output cleanup.
        $modelApi->cleanupOutputs($modelId, "2024");

        // Trigger an texture cleanup.
        $modelApi->cleanupTextures($modelId, "2024");

        // Get the cleanup status.
        $resCleanup = $modelApi->getCleanupStatus($modelId);
        $this->assertNotEmpty($resCleanup->getCleanup());
    }

    public function testParameters(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $modelApi = new ModelApi($client, $modelConfig);

        // Fetch a model.
        $resModel = $modelApi->getModel($modelId);
        $this->assertNotNull($resModel->getParameters());
        $this->assertNotEmpty($resModel->getParameters());

        // Update the model's parameter default values. However, for the sake of simplicity, we are
        // going to reuse the currently set default values.
        $reqDefval = [];
        foreach ($resModel->getParameters() as $key => $param) {
            $reqDefval[$key] = $param->getDefval();
        }
        $modelApi->updateParameterDefaultValues($modelId, $reqDefval);

        // Update the model's parameter definitions.
        $tooltip = 'Updated via PHP SDK, ' . TestUtils::now();
        $reqParam = [];
        foreach ($resModel->getParameters() as $key => $param) {
            $reqParam[$key] = ['tooltip' => $tooltip];
        }
        $modelApi->updateParameterDefinitions($modelId, $reqParam);
    }

    public function testModelBlocking(): void
    {
        global $host;
        global $jwtBackend;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $modelApi = new ModelApi($client, $backendConfig);
        $sessionApi = new SessionApi($client, $modelConfig);

        // Fetch a model.
        $resModel = $modelApi->getModel($modelId);
        $this->assertFalse($resModel->getSetting()->getModel()->getBlockingReasons()->getOwner());
        $this->assertFalse($resModel->getSetting()->getModel()->getBlockingReasons()->getCreditLimit());
        $this->assertFalse($resModel->getSetting()->getModel()->getBlockingReasons()->getPluginPermission());

        // Block the model.
        $modelApi->updateModel($modelId, new ReqModel(['blockingReasons' => ['creditLimit' => true]]));

        // Fetch a model.
        $resModel = $modelApi->getModel($modelId);
        $this->assertFalse($resModel->getSetting()->getModel()->getBlockingReasons()->getOwner());
        $this->assertTrue($resModel->getSetting()->getModel()->getBlockingReasons()->getCreditLimit());
        $this->assertFalse($resModel->getSetting()->getModel()->getBlockingReasons()->getPluginPermission());

        // Init session should not work anymore.
        $this->assertThrows(
            new ApiException(),
            function () use ($sessionApi, $modelId) {
                $sessionApi->createSessionByModel($modelId);
            }
        );

        // Unblock the model.
        $modelApi->updateModel($modelId, new ReqModel(['blockingReasons' => ['creditLimit' => false]]));

        // Session init should work again.
        $sessionId = $sessionApi->createSessionByModel($modelId)->getSessionId();
        $sessionApi->closeSession($sessionId);
    }

    public function testSoftDeleteAndRestore(): void
    {
        global $host;
        global $jwtBackend;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Soft-delete a model.
        (new ModelApi($client, $backendConfig))->deleteModel($modelId);

        // Fetch the model should not work anymore.
        $this->assertThrows(
            new ApiException(),
            function () use ($client, $modelConfig, $modelId) {
                (new ModelApi($client, $modelConfig))->getModel($modelId);
            }
        );

        // Restore the model.
        (new ModelApi($client, $backendConfig))->restoreModel($modelId);

        // Fetching the model should work again.
        (new ModelApi($client, $modelConfig))->getModel($modelId);
    }
}
