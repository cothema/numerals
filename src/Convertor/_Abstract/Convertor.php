<?php

namespace Cothema\Numerals\Convertor\A;

/**
 * Output abstract class
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
abstract class Convertor extends \Nette\Object implements \Cothema\Numerals\Convertor\I\Convertor {

    protected $value;

    /**
     *
     * @param \Cothema\Numerals\Input\I\Input $value
     */
    public function __construct(\Cothema\Numerals\Input\I\Input $value) {
        $this->value = $value;
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        return (string) $this->getOutput();
    }

    /**
     *
     * @return string
     */
    public function getOutput() {
        return $this->convert($this->value);
    }

    protected function utf8StrSplit($str = '', $len = 1) {
        return preg_split('/(?<=\G.{' . $len . '})/u', $str, -1, PREG_SPLIT_NO_EMPTY);
    }

}
