<?php
declare(strict_types=1);

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\{
    Car,
    Door,
    Wheel,
    Engine,
    Vehicle
};

/**
 * Class CarBuilder
 * @package App\Creational\Builder
 */
class CarBuilder implements Builder
{
    /** @var Car */
    private Car $car;

    /** @return void */
    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    /** @return void */
    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    /** @return void */
    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    /** @return void */
    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    /** @return Vehicle */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
