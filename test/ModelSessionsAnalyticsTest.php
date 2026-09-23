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

        // Analytics reads use the model JWT. Opening and closing the session use the ticket, with no access token.
        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $sessionConfig = (new SdConfig())->setHost($host);

        // The list filters on open time. Sample the start before the session exists, and the end after it does.
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
            // Poll until this session is listed as open. A missing row or a later status is retried.
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

            // Close the session.
            $this->closeOnce($sessionApi, $sessionId, $closed);

            // Poll until the same session is listed as pending.
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
            // Close the session if an assertion failed before the close above.
            $this->closeOnce($sessionApi, $sessionId, $closed);
        }
    }

    // Query bounds are DateTimeMs: 17 digits. Ticket expiry uses TestUtils::now(), which is 14.
    private function dateTimeMs(int $diffSeconds = 0): string
    {
        $dt = (new DateTimeImmutable('now', new DateTimeZone('UTC')))
            ->modify(sprintf('%+d seconds', $diffSeconds));

        return $dt->format('YmdHisv');
    }

    // The revealed session id, or the only '<redacted>' row when the id is hidden. Any other count throws.
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

    // Retry up to 8 times, 1s apart, while load or accept throws. accept is the condition for this phase.
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

    // Close at most once. The flag flips only after closeSession resolves, so a failed close is tried again from finally.
    private function closeOnce(SessionApi $sessionApi, string $sessionId, array &$state): void
    {
        if ($state['closed']) {
            return;
        }
        $sessionApi->closeSession($sessionId);
        $state['closed'] = true;
    }
}
