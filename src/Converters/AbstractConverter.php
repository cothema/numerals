<?php declare(strict_types=1);

namespace Cothema\Numerals\Converters;

use Cothema\Numerals\Inputs\InputInterface;
use Cothema\Numerals\Outputs\OutputInterface;

/**
 * Output abstract class
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
abstract class AbstractConverter implements ConverterInterface
{

    /** @var InputInterface */
    protected $_value;

    /**
     * AbstractConverter constructor.
     * @param InputInterface $value
     */
    public function __construct(InputInterface $value)
    {
        $this->_value = $value;
    }

    /**
     * @param string $str
     * @param int $len
     * @return array[]|false|string[]
     */
    protected static function utf8StrSplit(string $str = '', int $len = 1)
    {
        return preg_split('/(?<=\G.{' . $len . '})/u', $str, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return (string)$this->convert();
    }

    /**
     *
     * @return InputInterface
     */
    public function convert(): InputInterface
    {
        $inputClass = sprintf('\\Cothema\\Numerals\\Inputs\\%sInput', static::getFormatName());
        return new $inputClass($this->process($this->_value));
    }

    public abstract static function getFormatName();

    protected abstract function process();

}
