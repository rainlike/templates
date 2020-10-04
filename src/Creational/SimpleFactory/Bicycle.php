<?php
declare(strict_types=1);

namespace App\Creational\SimpleFactory;

/**
 * Class Bicycle
 * @package App\Creational\SimpleFactory
 */
class Bicycle
{
    /**
     * @param string $destination
     * @return void
     */
    public function driveTo(string $destination): void
    {
        echo "Conducir a {$destination}";
    }
}
