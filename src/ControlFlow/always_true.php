<?php

namespace App\ControlFlow;

function process() :bool
{
    return true;
}

function foo(bool $flag) :bool
{
    if (!$flag) {
        return process();
    }

    return $flag;
}