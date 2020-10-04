<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\FactoryMethod\FileLogger;
use App\Creational\FactoryMethod\StdoutLogger;
use App\Creational\FactoryMethod\FileLoggerFactory;
use App\Creational\FactoryMethod\StdoutLoggerFactory;

/**
 * Class FactoryMethodTest
 * @package App\Creational\FactoryMethod\Tests
 */
class FactoryMethodTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testCanCreateStdoutLogging(): void
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    /**
     * @group creational
     * @return void
     */
    public function testCanCreateFileLogging(): void
    {
        $loggerFactory = new FileLoggerFactory(\sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
