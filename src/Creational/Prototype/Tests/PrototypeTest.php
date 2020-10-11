<?php
declare(strict_types=1);

namespace App\Creational\Prototype\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\Prototype\{
    BarBookPrototype,
    FooBookPrototype
};

/**
 * Class PrototypeTest
 * @package App\Creational\Prototype\Tests
 */
class PrototypeTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testCanGetFooBook(): void
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
