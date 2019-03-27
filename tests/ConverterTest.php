<?php declare(strict_types = 1);

namespace RomanKata\Tests;

use PHPUnit\Framework\TestCase;
use RomanKata\Converter;

class ConverterTest extends TestCase
{
    /**
     * @dataProvider dataProviderForTestConverter
     */
    public function testConverter(int $arabic, string $expectedRoman)
    {
        $this->assertEquals($expectedRoman, Converter::convert($arabic));
    }

    public function dataProviderForTestConverter()
    {
        yield [1, 'I'];
        yield [2, 'II'];
        yield [3, 'III'];
        yield [5, 'V'];

        yield [10, 'X'];
        yield [11, 'XI'];
        yield [20, 'XX'];
        yield [23, 'XXIII'];
    }
}
