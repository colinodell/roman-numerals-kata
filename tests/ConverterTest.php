<?php declare(strict_types = 1);

namespace RomanKata\Tests;

use PHPUnit\Framework\TestCase;
use RomanKata\Converter;

class ConverterTest extends TestCase
{
    public function testConverterWith1()
    {
        $this->assertEquals("I", Converter::convert(1));
    }

    public function testConverterWith2()
    {
        $this->assertEquals("II", Converter::convert(2));
    }
}
