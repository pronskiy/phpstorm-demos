<?php

namespace A {

    enum Foo
    {
        case Bar;
        case Baz;
    }

    function f(Foo $foo)
    {
        return match ($foo) {

        };
    }
}