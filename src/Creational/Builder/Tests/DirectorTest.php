<?php
declare(strict_types=1);

namespace App\Creational\Builder\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\Builder\{
    Director,
    CarBuilder,
    TruckBuilder,
    Parts\Car,
    Parts\Truck
};

/**
 * Class DirectorTest
 * @package App\Creational\Builder\Tests
 */
class DirectorTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testCanBuildTruck(): void
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    /**
     * @group creational
     * @return void
     */
    public function testCanBuildCar(): void
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
