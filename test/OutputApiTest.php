<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\OutputApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqCustomizationOrCache;
use ShapeDiver\GeometryApiV2\Client\Model\ReqOutputDefinition;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class OutputApiTest extends TestCase
{
    public function testOutputs(): void
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
        $this->assertNotNull($resSession->getOutputs());
        $this->assertNotEmpty($resSession->getOutputs());
        $this->assertNotNull($resSession->getParameters());

        // Get first output.
        $output = $resSession->getOutputs()[array_key_first($resSession->getOutputs())];
        $this->assertNotNull($output);

        // Compute a new output version and wait until the computation has been finished. For the
        // sake of simplicity, we use the default values of all parameters that the output depends
        // on.
        $reqComp = [];
        foreach ($output->getDependency() as $paramId) {
            $reqComp[$paramId] = $resSession->getParameters()[$paramId]->getDefval();
        }

        // TODO: add `SdUtils::submitAndWaitForOutput` when implemented.

        // Alternatively, we can trigger the output computation without waiting for the result.
        $resComp = (new OutputApi($client, $config))->computeOutputs($sessionId, $reqComp);
        $this->assertNotNull($resComp->getOutputs());
        $this->assertNotNull($resComp->getOutputs()[$output->getId()]);

        $outputComp = $resComp->getOutputs()[$output->getId()];
        $this->assertNotNull($outputComp);

        // Get the already computed output from cache.
        // $reqCache = new ReqCustomizationOrCache([$output->getId() => $outputComp->getVersion()]);
        // $resCached = (new OutputApi($client, $config))->getCachedOutputs($sessionId, $reqCache);
        // $this->assertNotNull($resCached->getOutputs());
        // $this->assertNotNull($resCached->getOutputs()[$output->getId()]);

        // Update the output definition.
        (new OutputApi($client, $modelConfig))->updateOutputDefinitions(
            $modelId,
            [
                $output->getId() => new ReqOutputDefinition([
                    'tooltip' => 'Updated via PHP SDK, ' . TestUtils::now()
                ])
            ]
        );

        // List versions of an output.
        $resList = (new OutputApi($client, $modelConfig))
            ->listOutputVersions($sessionId, $output->getId());
        $this->assertNotEmpty($resList->getList()->getOutput());

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
