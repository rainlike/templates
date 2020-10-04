<?php
declare(strict_types=1);

namespace App\Creational\StaticFactory;

/**
 * Class FormatNumber
 * @package App\Creational\StaticFactory
 */
class FormatNumber implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}
