<?php

namespace Cothema\Numerals\Convertor\Roman;

use \Cothema\Numerals\Convertor;
use \Cothema\Numerals\Input;

/**
 * Convertor: Roman numerals to Arabic numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends Convertor\A\Convertor {

    use Convertor\T\Table\RomanToArabic;

    /**
     *
     * @param Input\Arabic $inputObject
     * @return string
     */
    protected function convert(Input\Roman $inputObject) {
        $roman = (string) $inputObject->getValue();

        $return = 0;
        foreach ($this->getTableRomanToArabic() as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $return += $value;
                $roman = substr($roman, strlen($key));
            }
        }

        return $return;
    }

}
