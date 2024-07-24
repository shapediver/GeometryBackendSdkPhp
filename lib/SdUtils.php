<?php

namespace ShapeDiver\GeometryApiV2;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class SdUtils
{
    /**
     *Upload the given file to the specified URL.
     *
     * @param string $url The target URL of the upload request.
     * @param $data The data that should be uploaded.
     * @param string $contentType Indicate the original media type of the resource.
     * @param ?string $filename The name of the file to be uploaded. When a filename has been
     * specified in the request-upload call, then the same filename has to be specified for the
     * upload as well.
     * @return \Psr\Http\Message\ResponseInterface
     */
    public static function upload(
        string $url,
        $data,
        string $contentType,
        ?string $filename = null
    ): ResponseInterface {
        $headers = ['Content-Type' => $contentType];
        if ($filename) {
            $headers['Content-Disposition'] = self::contentDispositionFromFilename($filename);
        }

        $client = new SdClient(['base_uri' => $url]);

        try {
            $response = $client->request('PUT', '', ['headers' => $headers, 'body' => $data]);
            return $response;
        } catch (RequestException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Upload the given asset to the specified ShapeDiver URL.
     *
     * @param string $url The target URL of the upload request.
     * @param $data The data that should be uploaded.
     * @param array $headers The headers object that was returned from the request-upload call.
     * @return \Psr\Http\Message\ResponseInterface
     */
    public static function upload_asset(
        string $url,
        $data,
        array $headers
    ): ResponseInterface {
        $resHeaders = ['Content-Type' => $headers['content_type']];
        if (!empty($headers['content_disposition'])) {
            $resHeaders['Content-Disposition'] = $headers['content_disposition'];
        }

        $client = new SdClient(['base_uri' => $url]);

        try {
            $response = $client->request('PUT', '', ['headers' => $resHeaders, 'body' => $data]);
            return $response;
        } catch (RequestException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Download from the specified URL.
     *
     * @param string $url The target URL of the download request.
     * @return \Psr\Http\Message\ResponseInterface
     */
    public static function download(string $url): ResponseInterface
    {
        $client = new SdClient(['base_uri' => $url]);

        try {
            $response = $client->request('GET', '');
            return $response;
        } catch (RequestException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Parse HTTP headers to extract size and filename information.
     *
     * @param array[string] $headers The HTTP headers of a file-metadata response.
     * @return array[string]
     * array(
     *   'size'     => 123,         // The file size in bytes.
     *   'filename' => 'foobar',    // The decoded name of the content-disposition header
     * );
     */
    public static function extractFileInfo(?array $headers): array
    {
        if ($headers === null) {
            return ['size' => null, 'filename' => null];
        }

        // Extract size from Content-Length header
        $size = null;
        if (isset($headers['Content-Length'])) {
            $size = (int)$headers['Content-Length'];
        } elseif (isset($headers['content-length'])) {
            $size = (int)$headers['content-length'];
        }

        // Extract filename from Content-Disposition header
        $filename = null;
        if (isset($headers['Content-Disposition'])) {
            $filename = self::filenameFromContentDisposition($headers['Content-Disposition']);
        } elseif (isset($headers['content-disposition'])) {
            $filename = self::filenameFromContentDisposition($headers['content-disposition']);
        }

        return ['size' => $size, 'filename' => $filename];
    }

    /**
     * Set content headers according to RFC 5987.
     *
     * @param string $filename The file name to use.
     * @return string
     */
    public static function contentDispositionFromFilename(string $filename): string
    {
        // Normalize the filename to ASCII
        $asciiName = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $filename);
        $header = 'attachment; filename="' . $asciiName . '"';

        if ($asciiName !== $filename) {
            $quotedName = rawurlencode($filename);
            $header .= "; filename*=UTF-8''" . $quotedName;
        }

        return $header;
    }

    /**
     * Extract and return the filename from a content-disposition HTTP header. Decodes the
     * `filename*` property if set.
     *
     * @param string $contentDisposition Content-Disposition header value.
     * @return string
     */
    public static function filenameFromContentDisposition(string $contentDisposition): ?string
    {
        $filename = null;
        $filenameStar = null;

        // Search for filename
        if (preg_match('/filename="([^"]+)"/', $contentDisposition, $matches)) {
            $filename = $matches[1];
        }

        // Search for filename*
        if (preg_match("/filename\\*=([^'']+''|)?(.+)/", $contentDisposition, $matchesStar)) {
            // Note: Encoding is ignored.
            $encodedFilename = $matchesStar[2];
            $filenameStar = urldecode($encodedFilename);
        }

        // Prefer filename* over filename
        return $filenameStar ?: $filename;
    }
}
