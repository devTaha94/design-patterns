<?php

require_once './Strategy/StrategyInterface.php';

class Context
{
    private StrategyInterface $strategy;

    public function __construct(StrategyInterface $strategy)
    {
         $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
         $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): StrategyInterface
    {
        echo 'Let us do some business';
        $this->strategy->doAlgorithm([]);
        echo 'Done';
        return  $this->strategy;
    }

}