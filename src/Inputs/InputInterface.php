<?php declare(strict_types=1);

namespace Cothema\Numerals\Inputs;

use Cothema\Numerals\Exceptions\BadInputException;

/**
 * Input Interface
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface InputInterface
{

    public function __construct($value = null);

    /**
     * Get name of formatting (e.g. Arabic)
     *
     * @return string
     */
    public static function getFormatName(): string;

    /**
     * @param $value
     * @throws BadInputException
     */
    public static function validate($value): void;

    public static function format($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     * @return void
     */
    public function setValue($value): void;

    /**
     * Stringify getValue()
     *
     * @return string
     */
    public function __toString(): string;

}
