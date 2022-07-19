<?php

require_once './Strategy/StrategyInterface.php';

class StrategyA implements StrategyInterface
{

    public function doAlgorithm(array $data): array
    {
        return [];
    }
}