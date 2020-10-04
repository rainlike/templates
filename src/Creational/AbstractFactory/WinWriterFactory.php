<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class WinWriterFactory
 * @package App\Creational\AbstractFactory
 */
class WinWriterFactory implements WriterFactory
{
    /** @return CsvWriter */
    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    /** @return JsonWriter */
    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}
