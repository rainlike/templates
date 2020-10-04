<?php
declare(strict_types=1);

namespace App\Creational\StaticFactory;

/**
 * Class FormatString
 * @package App\Creational\StaticFactory
 */
class FormatString implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {
        return $input;
    }
}