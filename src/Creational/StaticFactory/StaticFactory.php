<?php
declare(strict_types=1);

namespace App\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * Class StaticFactory
 * @package App\Creational\StaticFactory
 */
final class StaticFactory
{
    /**
     * @param string $type
     * @return Formatter
     */
    public static function factory(string $type): Formatter
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
