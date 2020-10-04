<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Class FileLoggerFactory
 * @package App\Creational\FactoryMethod
 */
class FileLoggerFactory implements LoggerFactory
{
    /** @var string */
    private string $filePath;

    /**
     * FileLoggerFactory constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /** @return Logger */
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
