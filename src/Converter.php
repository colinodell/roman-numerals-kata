<?php declare(strict_types = 1);

namespace RomanKata;

final class Converter
{
    private const DIGITS = [
        10 => 'X',
        1 => 'I',
    ];

    public static function convert(int $number): string
    {
        $roman = '';

        foreach (self::DIGITS as $arabicDigit => $romanDigit) {
            while ($number >= $arabicDigit) {
                $roman .= $romanDigit;
                $number -= $arabicDigit;
            }
        }

        return $roman;
    }
}
