<?php declare(strict_types = 1);

namespace RomanKata;

final class Converter
{
    public static function convert(int $number): string
    {
        if ($number === 2) {
            return 'II';
        }

        return 'I';
    }
}
