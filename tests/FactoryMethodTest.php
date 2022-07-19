<?php

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateBMWBrand()
    {
        require_once './FactoryMethod/BMWBrand.php';
        require_once './FactoryMethod/BMWBrandFactory.php';

        $brandFactory = new BMWBrandFactory();
        $brand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BMWBrand::class,$brand);
    }
}