<?php

declare(strict_types=1);

namespace WyriHaximus\Compress;

use WyriHaximus\TestUtilities\TestCase;

abstract class AbstractCompressorTest extends TestCase
{
    protected CompressorInterface $compressor;

    final protected function setUp(): void
    {
        parent::setUp();
        $this->compressor = $this->getCompressor();
    }

    final public function testCompress(): void
    {
        self::assertStringContainsString('foo', $this->compressor->compress('foo'));
    }

    abstract protected function getCompressor(): CompressorInterface;
}
