<?php

declare(strict_types=1);

namespace WyriHaximus\Compress\TestUtilities;

use PHPUnit\Framework\Attributes\Test;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\TestUtilities\TestCase;

abstract class AbstractCompressorTest extends TestCase
{
    protected CompressorInterface $compressor;

    final protected function setUp(): void
    {
        parent::setUp();

        $this->compressor = $this->getCompressor();
    }

    #[Test]
    final public function compress(): void
    {
        self::assertStringContainsString('foo', $this->compressor->compress('foo'));
    }

    abstract protected function getCompressor(): CompressorInterface;
}
