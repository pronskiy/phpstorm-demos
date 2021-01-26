<?php

use App\PHP8\attributes\FooBarAttribute;

#[FooBarAttribute]
class Bar
{
    #[FooBarAttribute]
    public const BAR = 8;

    public function baz($qux)
    {
    }
}

