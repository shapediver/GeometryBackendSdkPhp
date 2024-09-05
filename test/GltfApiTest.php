<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\GltfApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\QueryGltfConversion;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdUtils;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class GltfApiTest extends TestCase
{
    public function testUploadGltf(): void
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
        $fsize = filesize($fpath);
        $f = fopen($fpath, "r") or die("Unable to open file!");

        // Upload a new glTF.
        $resUpload = (new GltfApi($client, $config))->uploadGltf($sessionId, $f);
        $this->assertNotNull($resUpload->getGltf()->getHref());

        // Download the uploaded glTF.
        $dpath = '/tmp/' . TestUtils::now() . '.glb';
        SdUtils::download($resUpload->getGltf()->getHref(), $dpath);
        $this->assertEquals(filesize($dpath), $fsize);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testUploadGltfAndConvertToUsdz(): void
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
        $fsize = filesize($fpath);
        $f = fopen($fpath, "r") or die("Unable to open file!");

        // Upload a new glTF and convert to USDZ.
        $resUpload = (new GltfApi($client, $config))
            ->uploadGltf($sessionId, $f, QueryGltfConversion::USDZ);
        $this->assertNotNull($resUpload->getGltf()->getHref());

        // Download the created USDZ.
        $dpath = '/tmp/' . TestUtils::now() . '.usdz';
        SdUtils::download($resUpload->getGltf()->getHref(), $dpath);
        $this->assertNotEquals(filesize($dpath), $fsize);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
