<?php

namespace Cothema\Numerals\Convertor\Arabic;

use \Cothema\Numerals\Convertor;
use \Cothema\Numerals\Input;

/**
 * Convertor: Arabic numerals to Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Roman extends Convertor\A\Convertor implements Convertor\I\Convertor {

    use Convertor\T\Table\RomanToArabic;

    /**
     *
     * @param Input\Arabic $inputObject
     * @return string
     */
    protected function convert(Input\Arabic $inputObject) {
        $input = (int) $inputObject->getValue();

        $return = '';
        while ($input > 0) {
            foreach ($this->getTableRomanToArabic() as $rom => $arb) {
                if ($input >= $arb) {
                    $input -= $arb;
                    $return .= $rom;
                    break;
                }
            }
        }

        return $return;
    }

}
