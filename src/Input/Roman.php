<?php

namespace Cothema\Numerals\Input;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Roman extends \Nette\Object implements I\Input {

    /** @var string */
    private $value;

    /**
     *
     * @param string $value
     */
    public function __construct($value = NULL) {
        if ($value !== NULL) {
            $this->setValue($value);
        }
    }

    /**
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    /**
     *
     * @param string $value
     */
    public function setValue($value) {
        $this->value = $value;
    }

}
