<?php

$GLOBALS = [];
$GLOBALS += [];
$GLOBALS =& $x;
$x =& $GLOBALS;
unset($GLOBALS);

class Foo implements Serializable
{
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize(string $data)
    {
        // TODO: Implement unserialize() method.
    }

}


class MyDateTime extends DateTime
{
    public function modify(string $modifier) { return false; }
}

function getMyInteger(): int {
    return '6.8';
}

$array = [
    1.2 => 'foo',
    1.4 => 'bar',
    1.8 => 'baz',
];

var_dump($array);


$t = strlen(null);