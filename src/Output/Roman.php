<?php

namespace Cothema\Numerals\Output;

use \Cothema\Numerals\Input;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Roman extends A\Output implements I\Output {

    /**
     * {@inheritdoc}
     */
    public function __construct(Input\I\Input $value) {
        parent::__construct($value);
    }

    /**
     *
     * @return string
     */
    public function getOutput() {
        return $this->convert($this->value->format, 'Roman', $this->value);
    }

}
