<?php declare(strict_types = 1);

namespace RomanKata\Tests;

use PHPUnit\Framework\TestCase;
use RomanKata\Converter;

class ConverterTest extends TestCase
{
    public function testConverter()
    {
        $this->assertEquals("I", Converter::convert(1));
    }
}
