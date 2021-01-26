<?php
declare(strict_types=1);

$string = '';



    htmlspecialchars(
        $string,
        flags: ENT_COMPAT,
        double_encode: false,
    );


$value = '';
$name = '';

    // With options array
//    function setValue(string $name, mixed $value, array $options)
//    setValue($name, $value, [
//        'expire' => 'Nov 26', // <-- possible bug
//        'path' => "/",
//    ]);

    // With typed named arguments in PHP 8
    function setValue(string $name, mixed $value, int $expire = 0, string $path = '/', )
    {

    }
    setValue($name, $value,
        expire: 'Nov 26',   // <-- bug highlighted
        path: "/",          // <-- redundant
    );


//time() + (86400 * 30)


    // PHP 8
//    htmlspecialchars($string, double_encode: false);


    function foo(string $param1 = '', int $param2 = 0, bool $param3 = false)
    {

    }

    foo(param1: '', param2: 0, param3: true);

