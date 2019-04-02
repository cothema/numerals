<?php declare(strict_types=1);

namespace Cothema\Numerals\Inputs;

use Cothema\Numerals\Exceptions\BadInputException;

/**
 * Arabic numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class ArabicInput extends AbstractInput
{
    /**
     * @return string
     */
    public static function getFormatName(): string
    {
        return 'Arabic';
    }

    /**
     * @param $value
     * @throws BadInputException
     */
    public static function validate($value): void
    {
        if (!is_numeric($value)) {
            throw new BadInputException('Input value is not numeric!');
        }
    }

    public static function format($value)
    {
        return (int)$value;
    }

}
