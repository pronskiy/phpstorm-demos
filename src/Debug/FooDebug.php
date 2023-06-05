<?php

namespace App\Debug;

class FooDebug implements MyInterface
{
    public function __construct(
        public string $bar,
        public int    $baz,
    ) {}
}

var_dump(new FooDebug('Bar', 2023));
