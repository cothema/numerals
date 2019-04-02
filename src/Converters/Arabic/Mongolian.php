<?php declare(strict_types=1);

namespace Cothema\Numerals\Converters\Arabic;

use Cothema\Numerals\Converters\AbstractConverter;

/**
 * Converter: Arabic numerals to Mongolian numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Mongolian extends AbstractConverter
{

    /**
     * @return string
     */
    public static function getFormatName(): string
    {
        return 'Mongolian';
    }

    protected function process()
    {
        $input = (string)$this->_value->getValue();

        $return = '';
        $table = ArabicToMongolian::getTable();
        foreach (static::utf8StrSplit($input) as $numeral) {
            if (isset($table[$numeral])) {
                $return .= $table[$numeral];
            } else {
                throw new \Exception(sprintf('Unspecified numeral "%s".', $numeral));
            }
        }

        return $return;
    }

}
