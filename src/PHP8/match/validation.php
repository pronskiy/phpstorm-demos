<?php /** @noinspection PhpUnhandledExceptionInspection */


    match (true) {
        1 => '1',
        'true' => 'true',
    };


    match(returnsInt()) {
        1, 2 => true,
        "not used" => false,
    };

    function returnsInt(): int {

}

    match(foo()) {
        1, 2 => true,
        3, 1 => false,
    };

    function baz()
    {
        retur;
    }


$string = '';



    match ($string) {
        'foo' => foo(),
        'bar', 'baz' => bar(),
    };