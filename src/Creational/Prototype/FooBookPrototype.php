<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

/**
 * Class FooBookPrototype
 * @package App\Creational\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    /** @var string */
    protected string $category = 'Foo';

    /** @return mixed|void */
    public function __clone() {}
}
