<?php declare(strict_types = 1);

namespace RomanKata;

final class Converter
{
    private const DIGITS = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
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
