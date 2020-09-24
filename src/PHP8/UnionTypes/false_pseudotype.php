<?php

//class Foo {}
//class Bar {}

    function isFailed(): bool {
        return (bool)rand(0,1);
    }

    function maybeFoo(): Foo|false // false instead of bool
    {                              // because it will never return true
        return isFailed() ?: new Foo();
    }

//    function proceed(): false
//    {
//        return false;
//    }


$pos = strpos('abc', 'd');