<?php
declare(strict_types=1);

namespace App\Creational\SimpleFactory;

/**
 * Class SimpleFactory
 * @package App\Creational\SimpleFactory
 */
class SimpleFactory
{
    /** @return Bicycle */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
