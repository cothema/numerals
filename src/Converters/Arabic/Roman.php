<?php declare(strict_types=1);

namespace Cothema\Numerals\Converters\Arabic;

use Cothema\Numerals\ConversionTables\RomanToArabic;
use Cothema\Numerals\Converters\AbstractConverter;
use Cothema\Numerals\Input;

/**
 * Converter: Arabic numerals to Roman numerals
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
class Roman extends AbstractConverter
{

    /**
     * @return string
     */
    public static function getFormatName(): string
    {
        return 'Roman';
    }

    protected function process()
    {
        $input = (int)$this->_value->getValue();

        $return = '';
        while ($input > 0) {
            foreach (RomanToArabic::getTable() as $rom => $arb) {
                if ($input >= $arb) {
                    $input -= $arb;
                    $return .= $rom;
                    break;
                }
            }
        }

        return $return;
    }

}
