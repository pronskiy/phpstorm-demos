<?php

    $GLOBALS = [];
    $GLOBALS += [];
    $GLOBALS =& $x;
    $x =& $GLOBALS;
    unset($GLOBALS);





    class Foo implements Serializable
    {
        public function __serialize(): array
        {
            // TODO: Implement __serialize() method.
        }

        public function __unserialize(array $data): void
        {
            // TODO: Implement __unserialize() method.
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

var_dump(str_contains("foobar", null));

$a = [];
$a[15.5]; // deprecated, as key value loses the 0.5 component
$a[15.0]; // ok, as 15.0 == 15

function &test(): void {}

$arr = false;
$arr[] = 2;// deprecated

mb_check_encoding();
odbc_result_all();


$array1 = ["a" => 1];

$array2 = ["b" => 2];

$array = ["a" => 0, ...$array1, ...$array2];

$s = strstr(null, "\n");


class Foo34
{
    public function bar(): array
    {
    }
}

class Suppress extends Foo34
{

    public function bar(): int
    {
        return 25;
    }
}

class Foo implements ArrayAccess {
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset) {}
    // ...
}

function canReturnFalse() {
    return false;
}


    $arr = canReturnFalse();
    // naively try to append
    $arr[] = ['new row values'];













