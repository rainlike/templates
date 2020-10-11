<?php
declare(strict_types=1);

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Vehicle;

/**
 * Директор - это часть паттерна Строитель.
 * Ему известно об интерфейсе строителя и он может строить комплексный объект с его помощью.
 * Также можно передать несколько Строителей вместо одного, чтобы строить более сложные объекты.
 * Class Director
 * @package App\Creational\Builder
 */
class Director
{
    /**
     * @param Builder $builder
     * @return Vehicle
     */
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
