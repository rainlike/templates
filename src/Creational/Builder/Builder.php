<?php
declare(strict_types=1);

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Vehicle;

/**
 * Interface Builder
 * @package App\Creational\Builder
 */
interface Builder
{
    /** @return mixed */
    public function createVehicle();

    /** @return mixed */
    public function addWheel();

    /** @return mixed */
    public function addEngine();

    /** @return mixed */
    public function addDoors();

    /** @return Vehicle */
    public function getVehicle(): Vehicle;
}
