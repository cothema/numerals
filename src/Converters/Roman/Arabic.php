<?php declare(strict_types=1);

namespace Cothema\Numerals\Converter\Roman;

use Cothema\Numerals\ConversionTables\RomanToArabic;
use Cothema\Numerals\Converters\AbstractConverter;
use Cothema\Numerals\Input;

/**
 * Converter: Roman numerals to Arabic numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Arabic extends AbstractConverter
{

    /**
     * @return string
     */
    public static function getFormatName(): string
    {
        return 'Arabic';
    }

    protected function process()
    {
        $roman = (string)$this->_value->getValue();

        $return = 0;
        foreach (RomanToArabic::getTable() as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $return += $value;
                $roman = substr($roman, strlen($key));
            }
        }

        return $return;
    }

}
