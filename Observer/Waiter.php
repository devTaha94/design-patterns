<?php

class Waiter implements SplObserver
{

    public int $state = 0;

    public function update(SplSubject $subject): void
    {
        echo "Waiter: Reacted to the event.\n";
        $this->state += 1;
    }

    public function getState(): int
    {
        return $this->state;
    }
}