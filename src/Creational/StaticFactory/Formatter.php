<?php
declare(strict_types=1);

namespace App\Creational\StaticFactory;

/**
 * Interface Formatter
 * @package App\Creational\StaticFactory
 */
interface Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string;
}