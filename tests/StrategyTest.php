<?php

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        require_once './Strategy/Context.php';
        require_once './Strategy/StrategyA.php';
        require_once './Strategy/StrategyB.php';

        $strategy = new Context(new StrategyA());

        $this->assertInstanceOf(StrategyA::class,$strategy->doSomeBusinessLogic());

        $strategy->setStrategy(new StrategyB());

        $this->assertInstanceOf(StrategyB::class,$strategy->doSomeBusinessLogic());
    }
}