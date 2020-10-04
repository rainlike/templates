<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Class StdoutLoggerFactory
 * @package App\Creational\FactoryMethod
 */
class StdoutLoggerFactory implements LoggerFactory
{
    /** @return Logger */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
