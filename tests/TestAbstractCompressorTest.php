<?php

declare(strict_types=1);

namespace WyriHaximus\Compress\TestUtilities\Tests;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\TestUtilities\AbstractCompressorTest;

/** @internal */
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
