<?php

namespace App\Refactorings;

class Source
{
    public function foo()
    {
    }

    public function bar()
    {
        $this->foo();
        return 42;
    }
}

$src = new Source();
$src->bar();
