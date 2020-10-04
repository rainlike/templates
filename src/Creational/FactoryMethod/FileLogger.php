<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Class FileLogger
 * @package App\Creational\FactoryMethod
 */
class FileLogger implements Logger
{
    /** @var string */
    private string $filePath;

    /**
     * FileLogger constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @param string $message
     * @return mixed|void
     */
    public function log(string $message)
    {
        \file_put_contents($this->filePath, $message.PHP_EOL, FILE_APPEND);
    }
}
