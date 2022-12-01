<?php

require '../../vendor/autoload.php';

class Foo
{
    public function __construct(
        public string $bar
    )
    {
    }
}

$foo = new Foo('baz');
echo $foo->bar;
