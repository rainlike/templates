<?php
declare(strict_types=1);

namespace App\Creational\SimpleFactory\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\SimpleFactory\{
    Bicycle,
    SimpleFactory
};

/**
 * Class SimpleFactoryTest
 * @package App\Creational\SimpleFactory\Tests
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testCanCreateBicycle(): void
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
