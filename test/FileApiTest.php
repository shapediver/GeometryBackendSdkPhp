<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\Client\Api\FileApi;
use ShapeDiver\GeometryApiV2\Client\Api\SessionApi;
use ShapeDiver\GeometryApiV2\Client\Model\ReqFileDefinition;
use ShapeDiver\GeometryApiV2\Client\Model\ResParameterType;
use ShapeDiver\GeometryApiV2\SdClient;
use ShapeDiver\GeometryApiV2\SdConfig;
use ShapeDiver\GeometryApiV2\SdUtils;

require_once __DIR__ . '/config.php';

class FileApiTest extends TestCase
{
    public function testFile(): void
    {
        global $host;
        global $jwtModel;

        $client = new SdClient();
        $modelConfig = (new SdConfig())->setHost($host)->setAccessToken($jwtModel);
        $config = (new SdConfig())->setHost($host);

        // Initialize a new session.
        $ticket = TestUtils::createTicket();
        $resSession = (new SessionApi($client, $config))->createSessionByTicket($ticket);
        $sessionId = $resSession->getSessionId();
        $this->assertNotNull($resSession->getParameters());
        $this->assertNotEmpty($resSession->getParameters());

        // Search for a file-parameter.
        $fileParams = [];
        foreach ($resSession->getParameters() as $key => $param) {
            if ($param->getType() == ResParameterType::FILE) {
                array_push($fileParams, $param);
            }
        }
        $this->assertNotEmpty($fileParams);

        // File upload.
        $fpath = "test/data/logo.jpg";
        $fsize = filesize($fpath);
        $f = fopen($fpath, "r") or die("Unable to open file!");

        $filename = 'ShapeDiver_Logo.jpg';
        $format = 'image/jpeg';

        // Request a file upload for a specific file-parameter.
        $resUpload = (new FileApi($client, $config))->uploadFile(
            $sessionId,
            [
                $fileParams[0]->getId() => new ReqFileDefinition([
                    'filename' => $filename,
                    'format' => $format,
                    'size' => $fsize,
                ])
            ],
        );
        $file = $resUpload->getAsset()->getFile()[$fileParams[0]->getId()];
        $this->assertNotNull($file);

        // Upload the file.
        $resUpload = SdUtils::uploadAsset($file->getHref(), $f, $file->getHeaders());
        $this->assertEquals($resUpload->getStatusCode(), 200);

        // Download the uploaded file.
        $resData = (new FileApi($client, $modelConfig))
            ->downloadFile($sessionId, $fileParams[0]->getId(), $file->getId());
        $this->assertEquals(filesize($resData->getPathname()), $fsize);

        // Get metadata of an existing file.
        $resMetadata = (new FileApi($client, $config))
            ->getFileMetadataWithHttpInfo($sessionId, $fileParams[0]->getId(), $file->getId());
        $this->assertEquals($resMetadata[1], 200);
        $fileInfo = SdUtils::extractFileInfo($resMetadata[2]);
        $this->assertEquals($fileInfo['filename'], $filename);
        $this->assertEquals($fileInfo['size'], $fsize);

        // List all files of a specific file-parameter.
        $resList = (new FileApi($client, $modelConfig))
            ->listFiles($sessionId, $fileParams[0]->getId());
        $this->assertNotEmpty($resList->getList()->getFile());

        // Delete the uploaded file.
        (new FileApi($client, $modelConfig))
            ->deleteFile($sessionId, $fileParams[0]->getId(), $file->getId());

        // Close the session.
        (new SessionApi($client, $config))->closeSession($sessionId);
    }
}
