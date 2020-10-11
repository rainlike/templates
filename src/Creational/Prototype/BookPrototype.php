<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

/**
 * Class BookPrototype
 * @package App\Creational\Prototype
 */
abstract class BookPrototype
{
    /** @var string */
    protected string $title;

    /** @var string */
    protected string $category;

    /** @return mixed */
    abstract public function __clone();

    /** @return string */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
