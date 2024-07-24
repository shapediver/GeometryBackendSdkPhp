<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\ExportApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqExport;
use ShapeDiver\GeometryApiV2\Client\Model\ReqExportDefinition;
use ShapeDiver\GeometryApiV2\Client\Model\ReqExportOrCache;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class ExportApiTest extends TestCase
{
    public function testExports(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $resSession = (new SessionApi($client, $config))->createSessionByTicket($ticket);
        $sessionId = $resSession->getSessionId();
        $this->assertNotNull($resSession->getExports());
        $this->assertNotEmpty($resSession->getExports());
        $this->assertNotNull($resSession->getParameters());

        // Get first export.
        $export = $resSession->getExports()[array_key_first($resSession->getExports())];
        $this->assertNotNull($export);

        // Compute a new export version and wait until the computation has been finished. For the
        // sake of simplicity, we use the default values of all parameters that the export depends
        // on.
        $parameters = [];
        foreach ($export->getDependency() as $paramId) {
            $parameters[$paramId] = $resSession->getParameters()[$paramId]->getDefval();
        }
        $reqComp = (new ReqExport())
            ->setParameters($parameters)
            ->setExports([$export->getId()]);

        // TODO: add `SdUtils::submitAndWaitForExport` when implemented.

        // Alternatively, we can trigger the export computation without waiting for the result.
        $resComp = (new ExportApi($client, $config))->computeExports($sessionId, $reqComp);
        $this->assertNotNull($resComp->getExports());
        $this->assertNotNull($resComp->getExports()[$export->getId()]);

        $exportComp = $resComp->getExports()[$export->getId()];
        $this->assertNotNull($exportComp);

        // Get the already computed export from cache.
        // $reqCache = new ReqExportOrCache([$export->getId() => $exportComp->getVersion()]);
        // $resCached = (new ExportApi($client, $config))->getCachedExports($sessionId, $reqCache);
        // $this->assertNotNull($resCached->getExports());
        // $this->assertNotNull($resCached->getExports()[$export->getId()]);

        // Update the export definition.
        (new ExportApi($client, $modelConfig))->updateExportDefinitions(
            $modelId,
            [
                $export->getId() => new ReqExportDefinition([
                    'tooltip' => 'Updated via PHP SDK, ' . TestUtils::now()
                ])
            ]
        );

        // List versions of an export.
        $resList = (new ExportApi($client, $modelConfig))
            ->listExportVersions($sessionId, $export->getId());
        $this->assertNotEmpty($resList->getList()->getExport());

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
