<?php

use PHPUnit\Framework\TestCase;

    class Foo {
        private function m()
        {
        }
    }

    class MyTest extends TestCase
    {
        public function testMy()
        {
            $mock = $this->getMockBuilder(Foo::class)->getMock();
            $mock->method('m');
        }
    }