<?php

namespace ShapeDiver\GeometryApiV2\Test;

use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqTicket;
use ShapeDiver\GeometryApiV2\Client\Model\ReqTicketType;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;

require_once __DIR__ . '/config.php';

class TestUtils
{
    public static function createTicket(): string
    {
        global $host;
        global $jwtBackend;
        global $modelId;

        $config = SdConfig::getDefaultConfiguration()
            ->setHost($host)
            ->setAccessToken($jwtBackend);

        $sessionApi = new SessionApi(new SdClient(), $config);

        $reqTicket = (new ReqTicket())
            ->setPub(true)
            ->setAuthor(true)
            ->setType(ReqTicketType::BACKEND)
            ->setUntil(self::now(new \DateInterval('PT2M')));

        $resTicket = $sessionApi->createTicket($modelId, $reqTicket);
        return $resTicket->getTicket();
    }

    /**
     * Return the date time in numeric ISO-8601 format.
     *
     * Examples of intervals:
     *  - Second: new \DateInterval('PT1S')
     *  - Minute: new \DateInterval('PT1M')
     *  - Hour:   new \DateInterval('PT1H')
     *  - Day:    new \DateInterval('P1D')
     *  - Month:  new \DateInterval('P1M')
     *  - Year:   new \DateInterval('P1Y')
     */
    public static function now(?\DateInterval $diff = null): string
    {
        // Create a new DateTime object with the current date and time
        $currentTime = new \DateTime();

        // If a DateInterval is provided, add it to the current time
        if ($diff !== null) {
            $currentTime->add($diff);
        }

        // Format the DateTime object to a numeric ISO-8601 format without microseconds
        return $currentTime->format('YmdHis');
    }

    /**
     * Generate a random UUIDv4.
     * @return string UUID
     */
    public static function uuid(): string
    {
        $b = random_bytes(16);
        $b[6] = chr(ord($b[6]) & 0x0f | 0x40);
        $b[8] = chr(ord($b[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($b), 4));
    }
}
