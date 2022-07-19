<?php

class Restaurant implements SplSubject
{

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
         $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n";
    }

    public function notify(): void
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }


    public function addOrder()
    {
         $this->notify();
    }
}