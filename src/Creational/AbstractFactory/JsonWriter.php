<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Interface JsonWriter
 * @package App\Creational\AbstractFactory
 */
interface JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string;
}
