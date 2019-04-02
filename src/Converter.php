<?php declare(strict_types=1);

namespace Cothema\Numerals;

use Cothema\Numerals\Inputs\InputInterface;

/**
 * Numerals converter
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Converter
{

    /** @var InputInterface|null */
    private $_input;

    /**
     * Converter constructor.
     * @param string|null $input
     * @param string $format
     */
    public function __construct(?string $input = null, string $format)
    {
        if ($input !== null) {
            $this->setInput($input, $format);
        }
    }

    /**
     *
     * @param mixed $input
     * @param string $format
     */
    public function setInput($input, string $format)
    {
        $inputClass = sprintf('\\Cothema\\Numerals\\Inputs\\%sInput', $format);
        $this->_input = new $inputClass($input);
    }

    /**
     *
     * @param string $format
     * @return InputInterface
     */
    public function convert(string $format = 'Roman'): InputInterface
    {
        if (!$this->_input) {
            return null;
        }

        if ($format === $this->_input::getFormatName()) {
            return $this->_input;
        }

        $converter = sprintf('\\Cothema\\Numerals\\Converters\\%s\\%s', $this->_input::getFormatName(), $format);
        return (new $converter($this->_input))->convert();
    }

}
