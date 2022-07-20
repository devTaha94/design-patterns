<?php

require_once './Builder/CarBuilderInterface.php';

class Builder
{
    /**
     * @param CarBuilderInterface $builder

     */
    public function build(CarBuilderInterface $builder)
   {
       return $builder->createCar()
                      ->addDoors()
                      ->addBody()
                      ->addWheels()
                      ->getCar();
   }
}