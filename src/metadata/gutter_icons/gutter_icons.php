<?php

class ServiceManager
{
    public function __get(string $name)
    {

    }
}

(new ServiceManager())->foo->serviceMethod();



class A {
    public function doActionA($a) {
        return $a;
    }
}

class B {
    public function doActionB() {
    }
}

(new A())->doActionA(new B())->doActionB();



function customExitFunction()
{
    die;
}

customExitFunction();

