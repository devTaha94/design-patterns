<?php

require_once './AbstractFactory/BMW.php';
require_once './AbstractFactory/Toyota.php';

class CarAbstractFactory
{
    /*
        private int $tax = 10;
        private int $price;

        public function __construct($price)
        {
            $this->price = $price;
        }

        public function createBMWCar(): BMW
        {
            return new BMW($this->price);
        }

        public function createToyotaCar() :Toyota
        {
            return new Toyota($this->price, $this->tax);
        }
   */

    /**
     * @param CarInterface $ICar
     * @return int
     */
    public function create(CarInterface $ICar):int
    {
        return $ICar->calculatePrice();
    }
}
