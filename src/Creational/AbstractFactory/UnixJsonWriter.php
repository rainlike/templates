<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 * Class UnixJsonWriter
 * @package App\Creational\AbstractFactory
 */
class UnixJsonWriter implements JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return \json_encode($data, $options);
    }
}
