<?php

namespace Cothema\Numerals\Output\T\Table;

/**
 * Roman to Arabic convert table
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
trait RomanToArabic {

    protected function getTableRomanToArabic() {
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
