<?php

require_once './Builder/Model/ToyotaCar.php';

class ToyotaCar extends Car
{
    private $data = [];

    public function setParts($key, $value)
    {
        $this->data[$key] = $value;
    }
}