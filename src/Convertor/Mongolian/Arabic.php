<?php

namespace Cothema\Numerals\Convertor\Mongolian;

use \Cothema\Numerals\Convertor;
use \Cothema\Numerals\Input;

/**
 * Convertor: Arabic numerals to Mongolian numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends Convertor\A\Convertor {

    use Convertor\T\Table\ArabicToMongolian;

    /**
     *
     * @param Input\Arabic $inputObject
     * @return string
     */
    protected function convert(Input\Mongolian $inputObject) {
        $input = (string) $inputObject->getValue();

        $return = '';
        $table = array_flip($this->getTableArabicToMongolian());
        foreach ($this->utf8StrSplit($input) as $numeral) {
            if (isset($table[$numeral])) {
                $return .= $table[$numeral];
            } else {
                throw new \Exception(sprintf('Unspecified numeral "%s".', $numeral));
            }
        }

        return $return;
    }

}
