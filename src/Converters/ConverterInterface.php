<?php declare(strict_types=1);

namespace Cothema\Numerals\Converters;

use Cothema\Numerals\Inputs\InputInterface;
use Cothema\Numerals\Outputs\OutputInterface;

/**
 * Interface Output
 *
 * @author Miloš Havlíček <miloshavlicek@gmail.com>
 */
interface ConverterInterface
{

    /**
     * ConverterInterface constructor.
     * @param InputInterface $value
     */
    public function __construct(InputInterface $value);

    /**
     * Stringify convert();
     */
    public function __toString();

    /**
     * @return OutputInterface
     */
    public function convert();
}
