<?php

use Prueba\Hello;

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testSayAnything(){
        $said = new Hello();
        $this->assertEquals(
            "Hello world", $said->sayAnything("Hello world")
        );
    }
}