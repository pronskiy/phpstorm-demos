<?php
class Foo {
    public string $property = '';
}
$obj = new Foo();
$methodStr = '';
$classStr = 'Foo';

    // Create closure out of any callable
    function foo($a, $b) { }
    $closure = foo(...);
    $closure('a', 'b');

    // Works with all syntax variants
    $fn = strlen(...);
    $fn = $obj->method(...);
    $fn = Foo::method(...);
    $fn = [$obj, 'method'](...);
    $fn = ($obj->property)(...);
    $fn = $obj->$methodStr(...);
    $fn = $classStr::$methodStr(...);

    // Example of usage
    array_map(strval(...), [1, 2, 3]);




    $fn = strlen(...);

