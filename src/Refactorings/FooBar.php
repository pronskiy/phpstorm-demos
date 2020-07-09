<?php

namespace App\Refactorings;

class FooBar
{
    public function someMethod()
    {
        echo 'This is code that belongs here.';
        echo 'This is some long code
              that we want to move to other class';
    }
}