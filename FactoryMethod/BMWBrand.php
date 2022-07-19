<?php

require_once './FactoryMethod/CarBrandInterface.php';

class BMWBrand implements CarBrandInterface
{

    public function createBrand()
    {
        echo "BMW Brand";
    }
}