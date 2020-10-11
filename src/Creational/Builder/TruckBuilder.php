<?php
declare(strict_types=1);

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\{
    Door,
    Wheel,
    Truck,
    Engine,
    Vehicle
};

/**
 * Class TruckBuilder
 * @package App\Creational\Builder
 */
class TruckBuilder implements Builder
{
    /** @var Truck */
    private Truck $truck;

    /** @return void */
    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    /** @return void */
    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    /** @return void */
    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    /** @return void */
    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    /** @return Vehicle */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
