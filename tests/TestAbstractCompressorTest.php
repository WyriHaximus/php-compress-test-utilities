<?php

declare(strict_types=1);

namespace WyriHaximus\Compress\Tests;

use WyriHaximus\Compress\AbstractCompressorTest;
use WyriHaximus\Compress\CompressorInterface;

/**
 * @internal
 */
final class TestAbstractCompressorTest extends AbstractCompressorTest
{
    protected function getCompressor(): CompressorInterface
    {
        return new class () implements CompressorInterface {
            public function compress(string $string): string
            {
                return $string;
            }
        };
    }
}
