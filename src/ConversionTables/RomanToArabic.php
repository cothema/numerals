<?php declare(strict_types=1);

namespace Cothema\Numerals\ConversionTables;

/**
 * Roman to Arabic conversion table
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class RomanToArabic implements ConversionTableInterface
{

    public static function getTable(): array
    {
        return [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];
    }

}
