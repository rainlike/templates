<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

/**
 * Class BarBookPrototype
 * @package App\Creational\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /** @var string */
    protected string $category = 'Bar';

    /** @return mixed|void */
    public function __clone() {}
}
