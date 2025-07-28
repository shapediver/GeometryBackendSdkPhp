<?php

namespace ShapeDiver\GeometryApiV2;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class SdClient implements ClientInterface
{
    public const SDK_VERSION = "1.7.0";  # WARNING: This value is updated automatically!

    protected $client;

    /**
     * Maximum number of retries per request. Only retries on '429' and '502' status codes.
     *
     * @var int
     */
    protected $maxRetries;

    /**
     * Maximum number of seconds to wait between retries.
     *
     * @var int
     */
    protected $maxRetryWait;

    /**
     * Clients accept an array of constructor parameters.
     *
     * Here's an example of creating a client using a base_uri and an array of
     * default request options to apply to each request:
     *
     *     $client = new Client([
     *         'max_retries'      => 3,
     *         'max_retry_wait' => 5,
     *     ]);
     *
     * Configuration settings may include:
     *   - max_retries: Maximum number of retries per request. Only retries on '429' and '502'
     *     status codes.
     *   - max_retries_wait: Maximum number of seconds to wait between retries.
     *
     * @param array $config Client configuration settings.
     */
    public function __construct(array $config = [])
    {
        $this->client = new Client($config);

        $this->maxRetries = (isset($config['max_retries'])) ? $config['max_retries'] : 5;
        $this->maxRetryWait = (isset($config['max_retry_wait']))
            ? $config['max_retry_wait']
            : PHP_INT_MAX;
    }

    #[\Override]
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        $retryCounter = 0;

        while (true) {
            try {
                return $this->client->send($request, $options);
            } catch (BadResponseException $e) {
                $waitSec = $this->extractWaitSec($retryCounter, $e);
                sleep($waitSec);
                continue 1;
            } catch (\Throwable $e) {
                throw $e;
            }
        }
    }

    #[\Override]
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        return $this->attemptRequestAsync(
            array($this->client, 'sendAsync'),
            array($request, $options),
            0
        );
    }

    #[\Override]
    public function request(string $method, $uri, array $options = []): ResponseInterface
    {
        $retryCounter = 0;

        while (true) {
            try {
                return $this->client->request($method, $uri, $options);
            } catch (BadResponseException $e) {
                $waitSec = $this->extractWaitSec($retryCounter, $e);
                sleep($waitSec);
                continue;
            } catch (\Throwable $e) {
                throw $e;
            }
        }
    }

    #[\Override]
    public function requestAsync(string $method, $uri, array $options = []): PromiseInterface
    {
        return $this->attemptRequestAsync(
            array($this->client, 'requestAsync'),
            array($method, $uri, $options),
            0
        );
    }

    #[\Override]
    public function getConfig(?string $option = null): mixed
    {
        return $this->client->getConfig($option);
    }

    /**
     * Extracts the waiting time from a RequestException and returns it when the response status is
     * retry-able and the retry limit has not been reached yet. Otherwise, an Exception is thrown.
     *
     * @param int $retryCounter The number of already executed retries.
     * @param \GuzzleHttp\Exception\BadResponseException $e The thrown exception.
     * @return int
     * @throws \GuzzleHttp\Exception\BadResponseException
     */
    private function extractWaitSec(
        int &$retryCounter,
        BadResponseException $e
    ): int {
        $response = $e->getResponse();
        $waitSec = null;

        // Check for special response statuses.
        if ($response && $response->getStatusCode() === 429) {
            // 429 Too Many Requests - Try to extract waiting time from Retry-After header.
            $waitSec = $response->getHeaderLine('Retry-After');
            if (empty($waitSec)) {
                $waitSec = 60; // Default is 1 minute
            }
        } elseif ($response && $response->getStatusCode() === 502) {
            // 502 Bad Gateway - Try again after short pause.
            $waitSec = 1;
        }

        // Retry or throw.
        if ($waitSec !== null && $retryCounter < $this->maxRetries) {
            $retryCounter++;

            if ($this->maxRetryWait !== null) {
                $waitSec = min($waitSec, $this->maxRetryWait);
            }

            return $waitSec;
        } else {
            throw $e;
        }
    }

    /**
     * Attempts to send a request asynchronously and retries requests when possible.
     *
     * @param array $fn The async `$client` function to execute.
     * @param array $args Arguments of `$fn`. The last item must be `$options`!
     * @param int $retryCounter The number of executed retries.
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \GuzzleHttp\Exception\BadResponseException
     */
    private function attemptRequestAsync(
        array $fn,
        array $args,
        int $retryCounter
    ): PromiseInterface {
        return call_user_func_array($fn, $args)->then(
            function (ResponseInterface $response) {
                return $response;
            },
            function ($e) use ($fn, $args, $retryCounter) {
                if ($e instanceof BadResponseException) {
                    $waitSec = $this->extractWaitSec($retryCounter, $e);

                    $options = array_pop($args);
                    $options['delay'] = $waitSec * 1000; // Convert seconds to milliseconds
                    array_push($args, $options);

                    return $this->attemptRequestAsync($fn, $args, $retryCounter);
                } else {
                    throw $e;
                }
            }
        );
    }
}
