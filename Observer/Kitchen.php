<?php

class Kitchen implements SplObserver
{

    public int $state = 0;

    public function update(SplSubject $subject): void
    {
        echo "Kitchen: Reacted to the event.\n";
        $this->state += 1;
    }

    public function getState(): int
    {
        return $this->state;
    }
}