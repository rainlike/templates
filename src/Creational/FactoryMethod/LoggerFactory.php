<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Interface LoggerFactory
 * @package App\Creational\FactoryMethod
 */
interface LoggerFactory
{
    /** @return Logger */
    public function createLogger(): Logger;
}
