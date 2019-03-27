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
        yield [4, 'IV'];
        yield [5, 'V'];
        yield [8, 'VIII'];
        yield [9, 'IX'];

        yield [10, 'X'];
        yield [11, 'XI'];
        yield [20, 'XX'];
        yield [23, 'XXIII'];
        yield [55, 'LV'];
        yield [1505, 'MDV'];
        yield [1954, 'MCMLIV'];
        yield [2499, 'MMCDXCIX'];
        yield [3949, 'MMMCMXLIX'];
    }
}
