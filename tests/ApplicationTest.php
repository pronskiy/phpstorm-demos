<?php

namespace App\Tests;

use App\Application;
use Exception;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testRun()
    {
        $this->expectException(Exception::class);
        $str = 'PhpStorm 2020.1';
        $array = [];
        $array2 =[];

        $this->assertArrayHasKey($key, $array);
        $this->assertArrayNotHasKey($key, $array);
        $this->assertIsString($str);
        $this->assertIsNotArray($array);
        $this->assertCount(42, $array);
        $this->assertSameSize($array, $array2);
        $this->assertEqualsWithDelta(42, 41.999, 0.1, '');
        $this->assertEquals(42, Application::run());
    }
}
