<?php

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testBuilder()
    {
        require_once './Adapter/Adapter.php';

        $adapter = new Adapter(new OldClass());

        $this->assertSame('Iam OldClass doing something',$adapter->doSomething());
    }
}