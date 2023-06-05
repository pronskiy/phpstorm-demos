<?php

    class Fooo
    {
        public function foooMethod() {}
    }
    
    class Base
    {
        public function baseMethod() {}
    }
    
    interface I
    {
        public function iMethod();
    }
    
    $prophet = new \Prophecy\Prophet();
    $foo = $prophet->prophesize(Fooo::class)
        ->willExtend(Base::class )
        ->willImplement(I::class);
    
    $foo->reveal();
