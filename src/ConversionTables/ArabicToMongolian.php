<?php declare(strict_types=1);

namespace Cothema\Numerals\ConversionTables;

/**
 * Roman to Arabic conversion table
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class ArabicToMongolian implements ConversionTableInterface
{

    public static function getTable(): array
    {
        return [
            '0' => '᠐',
            '1' => '᠑',
            '2' => '᠒',
            '3' => '᠓',
            '4' => '᠔',
            '5' => '᠕',
            '6' => '᠖',
            '7' => '᠗',
            '8' => '᠘',
            '9' => '᠙',
        ];
    }

}
