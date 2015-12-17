<?php

namespace Cothema\Numerals\Output\A;

/**
 * Output abstract class
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
abstract class Output extends \Nette\Object {

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
        return $this->getOutput();
    }

}
