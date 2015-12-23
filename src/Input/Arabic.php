<?php

namespace Cothema\Numerals\Input;

/**
 * Arabic numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends \Nette\Object implements I\Input {

    /** @var integer */
    private $value;

    /**
     *
     * @param integer $value
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
    public function getFormat() {
        return 'Arabic';
    }

    /**
     *
     * @return integer
     */
    public function getValue() {
        return (int) $this->value;
    }

    /**
     *
     * @param integer $value
     */
    public function setValue($value) {
        $this->value = (int) $value;
    }

}
