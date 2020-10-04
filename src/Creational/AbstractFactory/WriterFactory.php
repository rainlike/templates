<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Interface WriterFactory
 * @package App\Creational\AbstractFactory
 */
interface WriterFactory
{
    /** @return CsvWriter */
    public function createCsvWriter(): CsvWriter;

    /** @return JsonWriter */
    public function createJsonWriter(): JsonWriter;
}
