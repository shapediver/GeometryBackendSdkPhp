<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\AuthGroupApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqAuthorizationGroup;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class AuthGroupApiTest extends TestCase
{
    public function testCreate(): void
    {
        global $host;
        global $jwtBackend;
        global $modelId;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);

        // Create a new authorization group.
        $reqAuthGroup = (new ReqAuthorizationGroup())
            ->setModels([$modelId])
            ->setUsers([TestUtils::uuid()])
            ->setOrganizations([TestUtils::uuid()]);
        $resAuthGroup = (new AuthGroupApi($client, $backendConfig))
            ->createAuthorizationGroup($reqAuthGroup);
        $this->assertNotNull($resAuthGroup);
    }
}
