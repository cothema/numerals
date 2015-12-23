<?php

namespace Cothema\Numerals\Convertor\I;

/**
 * Interface Output
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface Convertor {

    /**
     *
     * @param \Cothema\Numerals\Input\I\Input $value
     */
    public function __construct(\Cothema\Numerals\Input\I\Input $value);

    /**
     * Alias of getOutput();
     */
    public function __toString();

    /**
     * @return string
     */
    public function getOutput();
}
