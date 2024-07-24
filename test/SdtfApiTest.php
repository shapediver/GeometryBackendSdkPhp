<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\SdtfApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqSdtfDefinition;
use ShapeDiver\GeometryApiV2\Client\Model\ReqSdtfType;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;
use ShapeDiver\GeometryApiV2\SdUtils;

require_once __DIR__ . '/config.php';

class SdtfApiTest extends TestCase
{
    public function testSdtf(): void
    {
        global $host;
        global $jwtModel;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $config = (new SdConfig())->setHost($host);
        $namespace = "pub";

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $config))
            ->createSessionByTicket($ticket)
            ->getSessionId();

        /* sdTF upload. */
        $fpath = "test/data/test.sdtf";
        $fsize = filesize($fpath);
        $f = fopen($fpath, "r") or die("Unable to open file!");

        // Request a sdTF upload for a specific namespace.
        $resUpload = (new SdtfApi($client, $config))->uploadSdtf(
            $sessionId,
            [
                new ReqSdtfDefinition([
                    'contentLength' => $fsize,
                    'contentType' => ReqSdtfType::MODEL_SDTF,
                    'namespace' => $namespace,
                ])
            ],
        );
        $sdtf = $resUpload->getAsset()->getSdtf()[0];
        $this->assertNotNull($sdtf);

        // Upload the sdTF.
        $upload = SdUtils::uploadAsset($sdtf->getHref(), $f, $sdtf->getHeaders());
        $this->assertEquals($upload->getStatusCode(), 200);

        // Download the uploaded sdTF.
        $resData = (new SdtfApi($client, $modelConfig))->downloadSdtf(
            $sessionId,
            $namespace,
            $sdtf->getId(),
        );
        $this->assertEquals(filesize($resData->getPathname()), $fsize);

        // List all sdTFs of a specific namespace.
        $resList = (new SdtfApi($client, $modelConfig))->listSdtfs($sessionId, $namespace);
        $this->assertNotEmpty($resList->getList()->getSdtf());

        // Delete the uploaded sdTF.
        (new SdtfApi($client, $modelConfig))->deleteSdtf($sessionId, $namespace, $sdtf->getId());

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
