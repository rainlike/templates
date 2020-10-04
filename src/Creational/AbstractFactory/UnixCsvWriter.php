<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class UnixCsvWriter
 * @package App\Creational\AbstractFactory
 */
class UnixCsvWriter implements CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string
    {
        return \join(',', $line) . "\n";
    }
}
