<?php
declare(strict_types=1);

namespace App\Creational\Singleton;

/**
 * Class Singleton
 * @package app\Singleton
 */
class Singleton
{
    /** @var self|null */
    private static ?Singleton $instance = null;

    /** @return void */
    private function __construct() {}

    /** @return void */
    private function __clone() {}

    /** @return void */
    private function __wakeup() {}

    /** @return self */
    public static function getInstance(): self
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
