<?php

require_once './Strategy/StrategyInterface.php';

class StrategyB implements StrategyInterface
{

    public function doAlgorithm(array $data): array
    {
        return [];
    }
}