<?php declare(strict_types=1);

namespace Cothema\Numerals\ConversionTables;

/**
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface ConversionTableInterface
{

    public static function getTable(): array;

}
