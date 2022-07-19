<?php

require_once './AbstractFactory/CarInterface.php';

class Toyota implements CarInterface
{
    private $price, $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice()
    {
        return $this->price + $this->tax;
    }
}