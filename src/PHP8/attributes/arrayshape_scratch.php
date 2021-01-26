<?php


const USER_SHAPE = [
    'id'   => 'int',
    'name' => 'string',
    'foo'  => App\PHP8\Foo::class,
];
#[ArrayShape(USER_SHAPE)]
function test(
    #[ArrayShape(USER_SHAPE)] $p
): array {
    return $p;
}

$t = test(['id' => 0, '' => 'test', 'foo' => new App\PHP8\Foo()]);

function test2(int $p){}

test2($t['name']);
