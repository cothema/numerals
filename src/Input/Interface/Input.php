<?php

namespace Cothema\Numerals\Input\I;

/**
 * Interface Input
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface Input {

    public function getValue();

    public function setValue($value);
}
