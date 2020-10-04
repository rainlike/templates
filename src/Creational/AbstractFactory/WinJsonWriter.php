<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class WinJsonWriter
 * @package App\Creational\AbstractFactory
 */
class WinJsonWriter implements JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string
    {
        return \json_encode($data, JSON_PRETTY_PRINT);
    }
}
