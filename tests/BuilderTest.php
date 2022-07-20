<?php

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuildBMW()
    {
        require_once './Builder/BMWCarBuilder.php';
        require_once './Builder/Builder.php';

        $carBuilder = new Builder();
        $car = $carBuilder->build(new BMWCarBuilder());

        $this->assertSame('Get BMW Car',$car);
    }

    public function testBuildToyota()
    {
        require_once './Builder/ToyotaCarBuilder.php';
        require_once './Builder/Builder.php';

        $carBuilder = new Builder();
        $car = $carBuilder->build(new ToyotaCarBuilder());

        $this->assertSame('Get Toyota Car',$car);
    }
}