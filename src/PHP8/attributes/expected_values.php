<?php

//use JetBrains\PhpStorm\ExpectedValues as E;

class C
{
    const A_1 = 1;
    const A_2 = 2;

    /**
     * C constructor.
     */
    public function __construct() { }

}

#[ExpectedValues(values: )]
function add(
    $a
) {
    $a;
}

add(5);

function argstest($a, $b, $c)
{

}

argstest();