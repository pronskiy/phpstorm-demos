<?php

namespace App\Tests;

use App\Application;
use Exception;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testRun()
    {
        $str = 'PhpStorm 2020.1';
        $array = [
            'key' => 'value'
        ];
        $array2 =[
            'key' => 'value'
        ];

        $this->assertTrue(array_key_exists('key', $array));
        $this->assertFalse(array_key_exists('not_key', $array));
        $this->assertInternalType('string', $str);
        $this->assertNotInternalType('array', $str);
        $this->assertEquals(1, count($array));
        $this->assertEquals(count($array), count($array2));
        $this->assertEquals(42, 41.999, '', 0.1);
        $this->assertEquals(42, Application::run());
    }
}
