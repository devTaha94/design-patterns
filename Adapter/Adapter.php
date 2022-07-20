<?php

class NewClass
{
    public function doSomething(): string
    {
        return 'Iam NewClass doing something';
    }
}

class OldClass
{
    public function doSpecificSomething(): string
    {
        return 'Iam OldClass doing something';
    }
}

class Adapter extends NewClass
{
    private OldClass $oldClass;

    public function __construct(OldClass $oldClass)
    {
        $this->oldClass = $oldClass;
    }

    /**
     * @return string
     */
    public function doSomething(): string
    {
        return $this->oldClass->doSpecificSomething();
    }
}