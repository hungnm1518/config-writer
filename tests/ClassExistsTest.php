<?php
namespace HungNM\ConfigWriter\Tests;

use PHPUnit_Framework_TestCase;
use HungNM\ConfigWriter;

class ClassExistsTest extends PHPUnit_Framework_TestCase
{


    public function classNameProvider()
    {
        return [
            [
                ConfigWriter\Facade::class,
            ],
            [
                ConfigWriter\Repository::class,
            ],
        ];
    }

    /**
    * @dataProvider classNameProvider
    */
    public function testClassExists($className)
    {
        $this->assertTrue(class_exists($className));
    }
}
