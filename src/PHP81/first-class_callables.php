<?php

// Можно сделать closure из любого callable
function foo($a, $b) { }
$closure = foo(...);
$closure('a', 'b');

// Работает со всеми вариантами синтаксиса
$fn = strlen(...);
$fn = $obj->method(...);
$fn = Foo::method(...);
$fn = [$obj, 'method'](...);
$fn = ($obj->property)(...);
$fn = $obj->$methodStr(...);
$fn = $classStr::$methodStr(...);

// Пример использования
array_map(strval(...), [1, 2, 3]);