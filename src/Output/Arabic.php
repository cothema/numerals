<?php

namespace Cothema\Numerals\Output;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends A\Output implements I\Output {

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
        return $this->convertRomanToArabic($this->value);
    }

    /**
     * 
     * @param integer $inputObject
     * @return string
     */
    private function convertRomanToArabic($inputObject) {
        $input = (int) $inputObject->getValue();
        $table = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
        $return = '';
        while ($input > 0) {
            foreach ($table as $rom => $arb) {
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
