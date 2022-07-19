<?php

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBMWCar()
    {
        /*
        require_once './AbstractFactory/CarAbstractFactory.php';

        $carFactory = new CarAbstractFactory(100);
        $bmw = $carFactory->createBMWCar();
        $toyota = $carFactory->createToyotaCar();

        $this->assertInstanceOf(BMW::class,$bmw);
        $this->assertInstanceOf(Toyota::class,$toyota);
        */
        require_once './AbstractFactory/CarAbstractFactory.php';

        $create = new CarAbstractFactory();
        $result = $create->create(new BMW(10));

        $this->assertSame(10,$result);
    }
}