<?php

class Test extends \PHPUnit\Framework\TestCase
{
    public function doTest()
    {
        $x = 100;
        $y = 101;

        $this->assertEquals($x, $y);
        
        $this->assertTrue($y, "Message");
        $this->assertFalse($y, "Message");
        $this->assertFalse($y, "Message");
    }
}
