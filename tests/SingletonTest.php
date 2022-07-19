<?php

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        require_once './Singleton/Singleton.php';

        $class1 = Singleton::getInstance();
        $class2 = Singleton::getInstance();

        $this->assertTrue($class1 === $class2);
    }
}