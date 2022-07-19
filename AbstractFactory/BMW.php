<?php

require_once './AbstractFactory/CarInterface.php';

class BMW implements CarInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price;
    }
}