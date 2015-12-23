<?php

namespace Cothema\Numerals\Convertor\T\Table;

/**
 * Roman to Arabic convert table
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
trait ArabicToMongolian {

    protected function getTableArabicToMongolian() {
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
