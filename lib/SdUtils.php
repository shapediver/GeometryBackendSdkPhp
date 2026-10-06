<?php

namespace ShapeDiver\GeometryApiV2;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use ShapeDiver\GeometryApiV2\Client\Model\ResAssetUploadHeaders;

class SdUtils
{
    /**
     * Upload the given file to the specified URL.
     *
     * @param string  $url         the target URL of the upload request
     * @param         $data        The data that should be uploaded
     * @param string  $contentType indicate the original media type of the resource
     * @param ?string $filename    The name of the file to be uploaded. When a filename has been
     *                             specified in the request-upload call, then the same filename has to be specified for the
     *                             upload as well.
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
            return $client->request(
                'PUT',
                '',
                [RequestOptions::HEADERS => $headers, RequestOptions::BODY => $data]
            );
        } catch (RequestException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Upload the given asset to the specified ShapeDiver URL.
     *
     * @param string                $url     the target URL of the upload request
     * @param resource              $data    the data that should be uploaded
     * @param ResAssetUploadHeaders $headers the headers object that was returned from the request-upload call
     */
    public static function uploadAsset(
        string $url,
        $data,
        ResAssetUploadHeaders $headers
    ): ResponseInterface {
        $resHeaders = ['Content-Type' => $headers->getContentType()];
        $contentDisposition = $headers->getContentDisposition();
        if (null !== $contentDisposition && '' !== $contentDisposition) {
            $resHeaders['Content-Disposition'] = $contentDisposition;
        }

        $client = new SdClient(['base_uri' => $url]);

        return $client->request(
            'PUT',
            '',
            [RequestOptions::HEADERS => $resHeaders, RequestOptions::BODY => $data]
        );
    }

    /**
     * Download from the specified URL.
     *
     * @param string          $url  the target URL of the download request
     * @param resource|string $sink either a path to a file that will store the contents of the
     *                              response body, or a resource from `fopen` to write the response to
     */
    public static function download(string $url, $sink): void
    {
        $client = new SdClient(['base_uri' => $url]);
        $client->request('GET', '', [RequestOptions::SINK => $sink]);
    }

    /**
     * Parse HTTP headers to extract size and filename information.
     *
     * @param null|array<string, array<int, string>> $headers the HTTP headers of a file-metadata response
     *
     * @return array{size: null|int, filename: null|string}
     *                                                      array(
     *                                                      'size'     => 123,         // The file size in bytes.
     *                                                      'filename' => 'foobar',    // The decoded name of the content-disposition header
     *                                                      );
     */
    public static function extractFileInfo(?array $headers): array
    {
        if (null === $headers) {
            return ['size' => null, 'filename' => null];
        }

        // Extract size from Content-Length header
        $size = null;
        if (isset($headers['Content-Length'])) {
            $size = (int) $headers['Content-Length'][0];
        } elseif (isset($headers['content-length'])) {
            $size = (int) $headers['content-length'][0];
        }

        // Extract filename from Content-Disposition header
        $filename = null;
        if (isset($headers['Content-Disposition'])) {
            $filename = self::filenameFromContentDisposition($headers['Content-Disposition'][0]);
        } elseif (isset($headers['content-disposition'])) {
            $filename = self::filenameFromContentDisposition($headers['content-disposition'][0]);
        }

        return ['size' => $size, 'filename' => $filename];
    }

    /**
     * Set content headers according to RFC 5987.
     *
     * @param string $filename the file name to use
     */
    public static function contentDispositionFromFilename(string $filename): string
    {
        // Normalize the filename to ASCII
        $asciiName = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $filename);
        $header = 'attachment; filename="'.$asciiName.'"';

        if ($asciiName !== $filename) {
            $quotedName = rawurlencode($filename);
            $header .= "; filename*=UTF-8''".$quotedName;
        }

        return $header;
    }

    /**
     * Extract and return the filename from a content-disposition HTTP header. Decodes the
     * `filename*` property if set.
     *
     * @param string $contentDisposition content-Disposition header value
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
