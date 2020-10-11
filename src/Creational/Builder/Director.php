<?php
declare(strict_types=1);

namespace App\Creational\Builder;

/**
 * Директор - это часть паттерна Строитель.
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
