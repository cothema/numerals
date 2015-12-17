<?php

namespace Cothema\Numerals\Output\I;

/**
 * Interface Output
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface Output {

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
