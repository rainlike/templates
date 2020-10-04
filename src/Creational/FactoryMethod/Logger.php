<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Interface Logger
 * @package App\Creational\FactoryMethod
 */
interface Logger
{
    /**
     * @param string $message
     * @return mixed
     */
    public function log(string $message);
}
