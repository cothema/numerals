<?php declare(strict_types=1);

namespace Cothema\Numerals\Inputs;

/**
 * Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class RomanInput extends AbstractInput
{

    /**
     * @return string
     */
    public static function getFormatName(): string
    {
        return 'Roman';
    }

    public static function validate($value): void
    {
        // @todo
    }

    public static function format($value)
    {
        return (string)$value;
    }

}
