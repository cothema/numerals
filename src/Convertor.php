<?php

namespace Cothema\Numerals;

/**
 * Numerals convertor
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Convertor extends \Nette\Object {

    /** @var \Cothema\Numerals\Input\I\Input */
    private $input;

    /**
     * 
     * @param string $input
     * @param string $format
     */
    public function __construct($input = NULL, $format = 'Arabic') {
        if($input !== NULL) {
            $this->setInput($input, $format);
        }
    }

    /**
     * 
     * @param string $input
     * @param string $format
     */
    public function setInput($input, $format = 'Arabic') {
        $inputClass = '\\Cothema\\Numerals\\Input\\' . $format;
        $this->input = new $inputClass($input);
    }

    /**
     * 
     * @param string $format
     * @return string
     */
    public function convert($format = 'Roman') {
        $outputClass = '\\Cothema\\Numerals\\Output\\' . $format;
        return (new $outputClass($this->input));
    }

}
