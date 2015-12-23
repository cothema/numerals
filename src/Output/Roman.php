<?php

namespace Cothema\Numerals\Output;

use \Cothema\Numerals\Input;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Roman extends A\Output implements I\Output {

    use T\Table\RomanToArabic;

    /**
     *
     * @param \Cothema\Numerals\Input\I\Input $value
     */
    public function __construct(\Cothema\Numerals\Input\I\Input $value) {
        parent::__construct($value);
    }

    /**
     *
     * @return string
     */
    public function getOutput() {
        return $this->convertArabicToRoman($this->value);
    }

    /**
     *
     * @param Input\Arabic $inputObject
     * @return string
     */
    private function convertArabicToRoman(Input\Arabic $inputObject) {
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
