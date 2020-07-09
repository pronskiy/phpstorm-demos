<?php

//class Foo {}
//class Bar {}

    function doSomething() : bool {
        return (bool)rand(0,1);
    }

    function maybeFoo() : Foo|false
    {
        $success = doSomething();
        return !$success ?: new Foo();
    }

$pos = strpos('abc', 'd');


    function proceed() :false
    {
        return false;
    }