<?php

class FooService
{
    public function serviceMethod()
    {

    }
}

class ServiceManager
{
    public function __get(string $name)
    {

    }
}
$serviceManager = (new ServiceManager());

$var1 = $serviceManager->foo->;


class A {
    public function doActionA($a) {
        return $a;
    }
}

class B {
    public function doActionB($b) {
        return $b;
    }
}

(new A())->doActionA(new B())->doActionB('');

function functionCall()
{
    die;
}

functionCall();

