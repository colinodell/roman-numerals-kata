<?php declare(strict_types = 1);

namespace RomanKata;

final class Converter
{
    private const DIGITS = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
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
