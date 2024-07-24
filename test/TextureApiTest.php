<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Api\TextureApi;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class TextureApiTest extends TestCase
{
    public function testTextures(): void
    {
        global $host;
        global $jwtModel;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $modelConfig))
            ->createSessionByTicket($ticket)
            ->getSessionId();

        // List all model textures.
        $resList = (new TextureApi($client, $modelConfig))->listTextures($sessionId);
        $this->assertNotNull($resList->getList()->getTexture());

        // Close the session.
        (new SessionApi($client, $modelConfig))->closeSession($sessionId);
    }
}
