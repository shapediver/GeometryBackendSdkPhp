<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\ModelStateApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModelState;
use ShapeDiver\GeometryApiV2\Client\Model\ReqTicket;
use ShapeDiver\GeometryApiV2\Client\Model\ReqTicketType;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

use function ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use function ShapeDiver\GeometryApiV2\Client\Api\ModelStateApi;
use function ShapeDiver\GeometryApiV2\Client\Model\ReqModelState;

require_once __DIR__ . '/config.php';

class SessionApiTest extends TestCase
{
    public function testInitSessionViaTicket(): void
    {
        global $host;
        global $jwtBackend;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $config = (new SdConfig())->setHost($host);

        // Create new ticket that allows to initialize a new session.
        $reqTicket = (new ReqTicket())
            ->setPub(true)
            ->setAuthor(true)
            ->setType(ReqTicketType::BACKEND)
            ->setUntil(TestUtils::now(new \DateInterval('PT2M')))
            ->setUseId2(false);

        $resTicket = (new SessionApi($client, $backendConfig))->createTicket($modelId, $reqTicket);
        $this->assertNotNull($resTicket->getTicket());

        // Initialize a new session using the ticket.
        $sessionId = (new SessionApi($client, $config))
            ->createSessionByTicket($resTicket->getTicket())
            ->getSessionId();
        $this->assertNotNull($sessionId);

        // Get the session defaults.
        $resDefaults = (new SessionApi($client, $config))->getSessionDefaults($sessionId);
        $this->assertEquals($resDefaults->getSessionId(), $sessionId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testInitSessionViaModel(): void
    {
        global $host;
        global $jwtBackend;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session using the model ID.
        $sessionId = (new SessionApi($client, $backendConfig))
            ->createSessionByModel($modelId)
            ->getSessionId();
        $this->assertNotNull($sessionId);

        // Get the session defaults.
        $resDefaults = (new SessionApi($client, $config))->getSessionDefaults($sessionId);
        $this->assertEquals($resDefaults->getSessionId(), $sessionId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testInitSessionWithModelState(): void
    {
        global $host;
        global $jwtBackend;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $resSession = (new SessionApi($client, $config))->createSessionByTicket($ticket);
        $this->assertNull($resSession->getModelState());
        $sessionId = $resSession->getSessionId();

        # Create minimal Model-State.
        $reqModelState = (new ReqModelState())->setParameters([]);
        $resModelState = (new ModelStateApi($client, $config))
            ->createModelState($sessionId, $reqModelState);
        $modelStateId = $resModelState->getModelState()->getId();
        $modelId = $resModelState->getModelState()->getModelId();

        # Test: Create session via ticket and Model-State.
        $res = (new SessionApi($client, $config))
            ->createSessionByTicket($ticket, $modelStateId, true);
        $this->assertNotNull($res->getModelState());
        (new SessionApi($client, $config))->closeSession($res->getSessionId());

        # Test: Create session via model and Model-State.
        $res = (new SessionApi($client, $backendConfig))
            ->createSessionByModel($modelId, $modelStateId, false);
        $this->assertNotNull($res->getModelState());
        (new SessionApi($client, $config))->closeSession($res->getSessionId());

        // Delete the Model-State.
        (new ModelStateApi($client, $backendConfig))->deleteModelState($modelStateId);

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }

    public function testDecryptTicket(): void
    {
        global $host;
        global $jwtBackend;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);

        // Create new ticket that allows to initialize a new session.
        $reqTicket = (new ReqTicket())
            ->setPub(true)
            ->setAuthor(true)
            ->setType(ReqTicketType::BACKEND)
            ->setUntil(TestUtils::now(new \DateInterval('PT2M')))
            ->setUseId2(false);

        $resTicket = (new SessionApi($client, $backendConfig))->createTicket($modelId, $reqTicket);
        $this->assertNotNull($resTicket->getTicket());

        // Decrypt the ticket.
        $decryptedTicket = (new SessionApi($client, $backendConfig))
            ->decryptTicket($resTicket->getTicket())
            ->getDecryptedTicket();
        $this->assertEquals($decryptedTicket->getPub(), $reqTicket->getPub());
        $this->assertEquals($decryptedTicket->getAuthor(), $reqTicket->getAuthor());
        $this->assertEquals($decryptedTicket->getType(), $reqTicket->getType());
        $this->assertEquals($decryptedTicket->getUntil(), $reqTicket->getUntil());
        $this->assertEquals($decryptedTicket->getUseId2(), $reqTicket->getUseId2());
    }
}
