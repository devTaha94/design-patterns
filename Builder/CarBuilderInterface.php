<?php

interface CarBuilderInterface
{
    public function createCar();

    public function addDoors();

    public function addBody();

    public function addWheels();

    public function getCar();

}