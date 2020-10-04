<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class WinCsvWriter
 * @package App\Creational\AbstractFactory
 */
class WinCsvWriter implements CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string
    {
        return \join(',', $line) . "\r\n";
    }
}
