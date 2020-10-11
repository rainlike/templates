<?php
declare(strict_types=1);

namespace App\Creational\Builder\Parts;

/**
 * Class Vehicle
 * @package App\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /** @var object[] */
    private array $data = [];

    /**
     * @param string $key
     * @param object $value
     * @return void
     */
    public function setPart(string $key, object $value): void
    {
        $this->data[$key] = $value;
    }
}
