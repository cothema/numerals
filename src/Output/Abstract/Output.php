<?php

namespace Cothema\Numerals\Output\A;

use \Cothema\Numerals\Input;

/**
 * Output abstract class
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
abstract class Output extends \Nette\Object {

    protected $value;

    /**
     *
     * @param Input\I\Input $value
     */
    public function __construct(Input\I\Input $value) {
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
     * @param string $from
     * @param string $to
     * @param Input\I\Input $value
     * @return string
     */
    protected function convert($from, $to, Input\I\Input $value) {
        $class = sprintf('\\Cothema\\Numerals\\Convertor\\%s\\%s', $from, $to);
        return (new $class($value))->output;
    }

}
