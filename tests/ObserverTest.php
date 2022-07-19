<?php

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        require_once './Observer/Kitchen.php';
        require_once './Observer/Restaurant.php';
        require_once './Observer/Waiter.php';

        $restaurant = new Restaurant();
        $kitchen    = new Kitchen();
        $waiter     = new Waiter();

        $restaurant->attach($kitchen);
        $restaurant->attach($waiter);

        $restaurant->addOrder();
        $this->assertTrue($kitchen->getState() === $waiter->getState());

        $restaurant->detach($waiter);

        $restaurant->addOrder();
        $this->assertTrue($kitchen->getState() !== $waiter->getState());
    }
}