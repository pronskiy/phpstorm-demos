<?php

function redirect(string $uri): never {
    header('Location: ' . $uri);
    exit();
}

new Fiber();

class Foo
{
    final public const X = "foo";
}

class Test {
    public readonly string $prop;

    public function __construct(string $prop) {
        // Legal initialization.
        $this->prop = $prop;
    }
}

strlen(...);
$closure(...);
$invokableObject(...);
$obj->method(...);
$obj->$methodStr(...);
($obj->property)(...);
Foo::method(...);
$classStr::$methodStr(...);
self::{$complex . $expression}(...);
'strlen'(...);
[$obj, 'method'](...);
[Foo::class, 'method'](...);

function test(
    $foo = new A,
    $bar = new B(1),
    $baz = new C(x: 2),
) {
}