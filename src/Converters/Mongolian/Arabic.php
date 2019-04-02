<?php declare(strict_types=1);

namespace Cothema\Numerals\Converter\Mongolian;

use Cothema\Numerals\ConversionTables\ArabicToMongolian;
use Cothema\Numerals\Converters\AbstractConverter;
use Cothema\Numerals\Input;
use Exception;

/**
 * Converter: Arabic numerals to Mongolian numerals
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
        $input = (string)$this->_value->getValue();

        $return = '';
        $table = array_flip(ArabicToMongolian::getTable());
        foreach (self::utf8StrSplit($input) as $numeral) {
            if (isset($table[$numeral])) {
                $return .= $table[$numeral];
            } else {
                throw new Exception(sprintf('Unspecified numeral "%s".', $numeral));
            }
        }

        return $return;
    }

}
