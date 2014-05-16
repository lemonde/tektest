<?php

namespace TestTek;

class FooTest extends \PHPUnit_Framework_TestCase
{
    public function testSayHello()
    {
    	$fooInstance = new Foo();
    	$this->assertEquals("Hello, I am Foo", $fooInstance->sayHello());
    }
}