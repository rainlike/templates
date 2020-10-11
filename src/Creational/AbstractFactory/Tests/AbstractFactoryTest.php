<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\AbstractFactory\{
    CsvWriter,
    JsonWriter,
    WriterFactory,
    WinWriterFactory,
    UnixWriterFactory
};

/**
 * Class AbstractFactoryTest
 * @package App\Creational\AbstractFactory\Tests
 */
class AbstractFactoryTest extends TestCase
{
    /** @return array */
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @group creational
     * @dataProvider provideFactory
     * @param WriterFactory $writerFactory
     * @return void
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory): void
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
