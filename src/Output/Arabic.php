<?php

namespace Cothema\Numerals\Output;

use \Cothema\Numerals\Input;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends A\Output implements I\Output {

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
        return $this->convertRomanToArabic($this->value);
    }

    /**
     *
     * @param Input\Roman $inputObject
     * @return string
     */
    private function convertRomanToArabic(Input\Roman $inputObject) {
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
