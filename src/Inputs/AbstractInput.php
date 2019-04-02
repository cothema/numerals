<?php declare(strict_types=1);

namespace Cothema\Numerals\Inputs;

use Cothema\Numerals\Exceptions\BadInputException;

/**
 * Arabic numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
abstract class AbstractInput implements InputInterface
{

    /** @var mixed */
    protected $_value;

    /**
     * AbstractInput constructor.
     * @param mixed $value
     * @throws BadInputException
     */
    public function __construct($value = null)
    {
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    public abstract static function getFormatName(): string;

    /**
     * @param $value
     * @throws BadInputException
     */
    public abstract static function validate($value): void;

    public abstract static function format($value);

    public function __toString(): string
    {
        return (string)$this->getValue();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @param string $value
     * @throws BadInputException
     */
    public function setValue($value): void
    {
        static::validate($value);
        $value = static::format($value);
        $this->_value = $value;
    }

}
