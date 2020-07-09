<?php

namespace App\Refactorings;

class FooBar
{
    public string $prop = '';

    public function methodToMove()
    {
        echo $this->prop;
        echo 'This is some long code
          that we want to move to a new class';
    }
}

function qux()
{
    echo 'Functions can be extracted to a Class too.';
}