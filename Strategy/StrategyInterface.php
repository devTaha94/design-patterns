<?php

interface StrategyInterface
{
    public function doAlgorithm(array $data): array;
}