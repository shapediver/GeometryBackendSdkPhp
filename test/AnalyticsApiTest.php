<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\AnalyticsApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqAnyCreditMetricId;
use ShapeDiver\GeometryApiV2\Client\Model\ReqCreditMetric;
use ShapeDiver\GeometryApiV2\Client\Model\ReqCreditMetrics;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModelStatistic;
use ShapeDiver\GeometryApiV2\Client\Model\ReqModelStatistics;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class AnalyticsApiTest extends TestCase
{
    public function testModelSessionStatistics(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $modelConfig))
            ->createSessionByTicket($ticket)
            ->getSessionId();

        # Fetch model statistics within a specific time range.
        $reqStats = (new ReqModelStatistics())->setParameters(
            [
                (new ReqModelStatistic())
                    ->setModelid([$modelId])
                    ->setTimestampFrom("2024")
                    ->setTimestampTo("2025")
            ]
        );
        $resStats = (new AnalyticsApi($client, $modelConfig))->getModelStatistics($reqStats);
        $this->assertNotEmpty($resStats->getAnalytics()->getModels());

        // Close the session.
        (new SessionApi($client, $modelConfig))->closeSession($sessionId);
    }

    public function testCreditMetrics(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $modelConfig))
            ->createSessionByTicket($ticket)
            ->getSessionId();

        # Fetch credit metrics within a specific time range.
        $reqCredits = (new ReqCreditMetrics())->setParameters(
            [
                (new ReqCreditMetric())
                    ->setId((new ReqAnyCreditMetricId())->setModelIds([$modelId]))
                    ->setTimestampFrom("2024")
                    ->setTimestampTo("2025")
            ]
        );
        $resStats = (new AnalyticsApi($client, $modelConfig))->getCreditMetrics($reqCredits);
        $this->assertNotEmpty($resStats->getAnalytics()->getCreditMetrics());

        // Close the session.
        (new SessionApi($client, $modelConfig))->closeSession($sessionId);
    }

    public function testUserCreditMetrics(): void
    {
        global $host;
        global $jwtBackend;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);

        $resCredits = (new AnalyticsApi($client, $backendConfig))->getUserCreditMetrics("202407");
        $this->assertNotEmpty($resCredits->getAnalytics()->getCreditMetrics());
    }

    public function testOrganizationCreditMetrics(): void
    {
        global $host;
        global $jwtBackend;

        $client = new SdClient();
        $backendConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtBackend);

        $resCredits = (new AnalyticsApi($client, $backendConfig))->getOrganizationCreditMetrics("202407");
        $this->assertNotEmpty($resCredits->getAnalytics()->getCreditMetrics());
    }

    public function testModelUserCreditMetrics(): void
    {
        global $host;
        global $jwtModel;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        $userId = "92a8410b-6496-4b86-8c3f-1014d59f7fa3";
        $resCredits = (new AnalyticsApi($client, $modelConfig))
            ->getModelUserCreditMetrics("202407", $userId);
        $this->assertNotEmpty($resCredits->getAnalytics()->getCreditMetrics());
    }

    public function testModelOrganizationCreditMetrics(): void
    {
        global $host;
        global $jwtModel;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);

        $orgId = "a785380e-183d-11ef-926a-f3f7d2b9f407";
        $resCredits = (new AnalyticsApi($client, $modelConfig))
            ->getModelOrganizationCreditMetrics("202407", $orgId);
        $this->assertNotEmpty($resCredits->getAnalytics()->getCreditMetrics());
    }
}
