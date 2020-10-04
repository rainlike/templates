<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class UnixWriterFactory
 * @package App\Creational\AbstractFactory
 */
class UnixWriterFactory implements WriterFactory
{
    /** @return CsvWriter */
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    /** @return JsonWriter */
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}
