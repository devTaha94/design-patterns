<?php

require_once './Builder/CarBuilderInterface.php';

class ToyotaCarBuilder implements CarBuilderInterface
{

    public function createCar()
    {
        echo 'Create Toyota Car';
        return $this;
    }

    public function addDoors()
    {
        echo 'Add doors to Toyota Car';
        return $this;
    }

    public function addBody()
    {
        echo 'Add body to Toyota Car';
        return $this;
    }

    public function addWheels()
    {
        echo 'Add wheels to Toyota Car';
        return $this;
    }

    public function getCar()
    {
        return 'Get Toyota Car';
    }
}