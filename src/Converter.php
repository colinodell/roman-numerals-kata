<?php declare(strict_types = 1);

namespace RomanKata;

final class Converter
{
    public static function convert(int $number): string
    {
        $roman = '';

        while ($number-- > 0) {
            $roman .= 'I';
        }

        return $roman;
    }
}
