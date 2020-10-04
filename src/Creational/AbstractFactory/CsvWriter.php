<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Interface CsvWriter
 * @package App\Creational\AbstractFactory
 */
interface CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string;
}
