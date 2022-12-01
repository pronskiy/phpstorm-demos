<?php /** @noinspection PhpPropertyOnlyWrittenInspection */

/** @noinspection DuplicatedCode */

/** @noinspection PhpExpressionResultUnusedInspection */

/* Intersection types */

function count_and_iterate(Iterator&\Countable $value) {
    foreach($value as $val) {
        echo $val;
    }
    count($value);
}

/* Explicit octal notation */

0o16 === 14; // true
0o123 === 83; // true

0O16 === 14; // true
0O123 === 83; // true

016 === 0o16; // true
016 === 0O16; // true

/* Final class constants */

class Foo
{
    final const BAR = 'BAR';
}

class Bar extends Foo {
    public const TEST = '2';
}


/* `never` return type */

function redirect(string $uri): never {
    header('Location: ' . $uri);
    exit();
}

/* Fibers */

new Fiber();

/* Readonly properties */

class Test {
    public readonly string $prop;

    public function __construct(string $prop) {
        // Legal initialization.
        $this->prop = $prop;
    }
}

/* First-class callable syntax */
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

/* New in initializers */
function test(
    $foo = new A,
    $bar = new B(1),
    $baz = new C(x: 2),
) {
}

static $x = new Foo;

const C = new Foo;
