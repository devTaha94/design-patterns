<?php

require_once './Builder/Model/Car.php';

class BMWCar extends Car
{
    private $data = [];

    public function setParts($key, $value)
    {
        $this->data[$key] = $value;
    }
}