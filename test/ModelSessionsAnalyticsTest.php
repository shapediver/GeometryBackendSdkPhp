<?php

namespace ShapeDiver\GeometryApiV2\Test;

use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use ShapeDiver\GeometryApiV2\Client\Api\ModelApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\QueryOrder;
use ShapeDiver\GeometryApiV2\Client\Model\ResModelSession;
use ShapeDiver\GeometryApiV2\Client\Model\SessionAnalyticsStatus;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;
use Throwable;

require_once __DIR__ . '/config.php';

class ModelSessionsAnalyticsTest extends TestCase
{
    public function testModelSessionAnalytics(): void
    {
        global $host;
        global $jwtModel;
        global $modelId;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $sessionConfig = (new SdConfig())->setHost($host);

        $from = $this->dateTimeMs(-60);
        $ticket = TestUtils::createTicket();
        $sessionId = (new SessionApi($client, $sessionConfig))
            ->createSessionByTicket($ticket)
            ->getSessionId();
        $to = $this->dateTimeMs(60);
        $closed = ['closed' => false];

        $modelApi = new ModelApi($client, $modelConfig);
        $sessionApi = new SessionApi($client, $sessionConfig);

        try {
            $openPage = $this->untilRow(
                function () use ($modelApi, $modelId, $from, $to) {
                    return $modelApi->getModelSessionsAnalytics(
                        $modelId,
                        QueryOrder::DESC,
                        $from,
                        $to,
                        20
                    );
                },
                function ($page) use ($sessionId) {
                    $row = $this->soleSession($page->getSessions(), $sessionId);
                    if ($row->getStatus() !== SessionAnalyticsStatus::OPEN) {
                        throw new RuntimeException('session ' . $sessionId . ' is ' . $row->getStatus());
                    }
                }
            );
            $this->assertSame(
                SessionAnalyticsStatus::OPEN,
                $this->soleSession($openPage->getSessions(), $sessionId)->getStatus()
            );

            $this->closeOnce($sessionApi, $sessionId, $closed);

            $pendingPage = $this->untilRow(
                function () use ($modelApi, $modelId, $from, $to) {
                    return $modelApi->getModelSessionsAnalytics(
                        $modelId,
                        QueryOrder::DESC,
                        $from,
                        $to,
                        20
                    );
                },
                function ($page) use ($sessionId) {
                    $row = $this->soleSession($page->getSessions(), $sessionId);
                    if ($row->getStatus() !== SessionAnalyticsStatus::PENDING) {
                        throw new RuntimeException('session ' . $sessionId . ' is ' . $row->getStatus());
                    }
                }
            );
            $pending = $this->soleSession($pendingPage->getSessions(), $sessionId);
            $this->assertSame(SessionAnalyticsStatus::PENDING, $pending->getStatus());
            $this->assertSame($sessionId, $pending->getId());
        } finally {
            $this->closeOnce($sessionApi, $sessionId, $closed);
        }
    }

    private function dateTimeMs(int $diffSeconds = 0): string
    {
        $dt = (new DateTimeImmutable('now', new DateTimeZone('UTC')))
            ->modify(sprintf('%+d seconds', $diffSeconds));

        return $dt->format('YmdHisv');
    }

    private function soleSession(array $sessions, string $knownSessionId): ResModelSession
    {
        $revealed = [];
        foreach ($sessions as $row) {
            if ($row->getId() === $knownSessionId) {
                $revealed[] = $row;
            }
        }
        if (count($revealed) === 1) {
            return $revealed[0];
        }
        if (count($revealed) > 1) {
            throw new RuntimeException("multiple analytics rows for session {$knownSessionId}");
        }
        $redacted = [];
        foreach ($sessions as $row) {
            if ($row->getId() === '<redacted>') {
                $redacted[] = $row;
            }
        }
        if (count($redacted) === 1) {
            return $redacted[0];
        }
        throw new RuntimeException(
            'expected one analytics row for session '
            . $knownSessionId
            . ', found '
            . count($revealed)
            . ' revealed and '
            . count($redacted)
            . ' redacted'
        );
    }

    private function untilRow(callable $load, callable $accept): mixed
    {
        for ($attempt = 0; $attempt < 8; $attempt++) {
            try {
                $value = $load();
                $accept($value);

                return $value;
            } catch (Throwable $e) {
                if ($attempt === 7) {
                    throw $e;
                }
                sleep(1);
            }
        }
        throw new RuntimeException('analytics row did not appear');
    }

    private function closeOnce(SessionApi $sessionApi, string $sessionId, array &$state): void
    {
        if ($state['closed']) {
            return;
        }
        $sessionApi->closeSession($sessionId);
        $state['closed'] = true;
    }
}
