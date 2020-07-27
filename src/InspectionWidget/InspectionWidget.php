<?php

class InspectionWidget
{
    private static $log;

    public function fooMetod()
    {
        throw new FooBarException();
    }

    protected function barMethod($name)
    {
        echo sprintf("Hello %s ", $name)
    }
}