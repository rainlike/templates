<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 * Class StdoutLogger
 * @package App\Creational\FactoryMethod
 */
class StdoutLogger implements Logger
{
    /**
     * @param string $message
     * @return mixed|void
     */
    public function log(string $message)
    {
        echo $message;
    }
}
