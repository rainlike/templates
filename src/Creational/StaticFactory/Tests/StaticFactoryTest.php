<?php
declare(strict_types=1);

namespace App\Creational\StaticFactory\Tests;

use InvalidArgumentException;

use PHPUnit\Framework\TestCase;

use App\Creational\StaticFactory\FormatNumber;
use App\Creational\StaticFactory\FormatString;
use App\Creational\StaticFactory\StaticFactory;

/**
 * Class StaticFactoryTest
 * @package App\Creational\StaticFactory\Tests
 */
class StaticFactoryTest extends TestCase
{
    /**
     * @group creational
     * @return void
     */
    public function testCanCreateNumberFormatter(): void
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    /**
     * @group creational
     * @return void
     */
    public function testCanCreateStringFormatter(): void
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    /**
     * @group creational
     * @return void
     */
    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        StaticFactory::factory('object');
    }
}
