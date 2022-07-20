<?php

require_once './Builder/CarBuilderInterface.php';

class BMWCarBuilder implements CarBuilderInterface
{

    public function createCar()
    {
        echo 'Create BMW Car';
        return $this;
    }

    public function addDoors()
    {
        echo 'Add doors to BMW Car';
        return $this;
    }

    public function addBody()
    {
        echo 'Add body to BMW Car';
        return $this;
    }

    public function addWheels()
    {
        echo 'Add wheels to BMW Car';
        return $this;
    }

    public function getCar()
    {
        return 'Get BMW Car';
    }
}