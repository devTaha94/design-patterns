<?php

require_once './FactoryMethod/BMWBrand.php';
require_once './FactoryMethod/BrandFactoryInterface.php';

class BMWBrandFactory implements BrandFactoryInterface
{

    public function buildBrand()
    {
       return new BMWBrand;
    }
}