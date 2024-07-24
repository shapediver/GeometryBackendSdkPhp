<?php

namespace ShapeDiver\GeometryApiV2\Test;

use PHPUnit\Framework\TestCase;
use ShapeDiver\GeometryApiV2\SdUtils;

class SdUtilsTest extends TestCase
{
    public function testExtractFileInfoNoHeader(): void
    {
        $res = SdUtils::extractFileInfo(null);
        $this->assertNull($res['filename']);
        $this->assertNull($res['size']);
    }

    public function testExtractFileInfoFullHeader(): void
    {
        $res = SdUtils::extractFileInfo([
            "Content-Length" => "165030",
            "Content-Disposition" => 'attachment ; filename="foobar.txt"',
        ]);
        $this->assertTrue($res['filename'] == "foobar.txt");
        $this->assertTrue($res['size'] == 165030);
    }

    public function testContentDispositionFromFilenameOfAsciiCharacters(): void
    {
        $res = SdUtils::contentDispositionFromFilename("foobar.txt");
        $this->assertTrue($res == 'attachment; filename="foobar.txt"');
    }

    public function testContentDispositionFromFilenameOfNonAsciiCharacters(): void
    {
        $res = SdUtils::contentDispositionFromFilename("ä€öü.jpg");
        $this->assertTrue(
            $res == 'attachment; filename="aEURou.jpg"; '
                . "filename*=UTF-8''a%CC%88%E2%82%ACo%CC%88u%CC%88.jpg"
        );
    }

    public function testFilenameFromContentDispositionInvalidFormat(): void
    {
        $res = SdUtils::filenameFromContentDisposition('attachment; somethign="else"');
        $this->assertNull($res);
    }

    public function testFilenameFromContentDispositionAsciiCharacters(): void
    {
        $res = SdUtils::filenameFromContentDisposition('attachment; filename="foobar.txt"');
        $this->assertTrue($res == "foobar.txt");
    }

    public function testFilenameFromContentDispositionNonAsciiCharactersWithEncoding(): void
    {
        $res = SdUtils::filenameFromContentDisposition(
            'attachment; filename="aEURou.jpg"; '
                . "filename*=UTF-8''a%CC%88%E2%82%ACo%CC%88u%CC%88.jpg"
        );
        $this->assertTrue($res == "ä€öü.jpg");
    }

    public function testFilenameFromContentDispositionNonAsciiCharactersWithoutEncoding(): void
    {
        $res = SdUtils::filenameFromContentDisposition(
            'attachment; filename="aEURou.jpg"; filename*=a%CC%88%E2%82%ACo%CC%88u%CC%88.jpg'
        );
        $this->assertTrue($res == "ä€öü.jpg");
    }
}
