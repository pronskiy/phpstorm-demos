<?php /** @noinspection PhpUnhandledExceptionInspection */
$falsableValue = '';


    // This was previously not possible since
    // arrow functions only accept a single expression
    // while throw was a statement.
    $callable = fn() => throw new Exception();

    $value1 = $nullableValue ?? throw new InvalidArgumentException();
    $value2 = $falsableValue ?: throw new InvalidArgumentException();

    $value3 = !empty($array)
        ? reset($array)
        : throw new InvalidArgumentException();

    json_decode();

$request_method = '';



    $status = match($request_method) {
        'POST' => $this->handlePost(),
        'GET', 'HEAD' =>  $this->handleGet(),
        default => throw new Exception(),
    };




    function fo()
{

}

var_dump($callable, $value1, $value2, $value3, $status);