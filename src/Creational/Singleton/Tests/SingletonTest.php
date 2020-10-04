<?php
declare(strict_types=1);

namespace App\Creational\Singleton\Tests;

use PHPUnit\Framework\TestCase;

use App\Creational\Singleton\Singleton;

/**
 * Class SingletonTest
 * @package app\Singleton
 */
class SingletonTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testGetInstance(): void
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
