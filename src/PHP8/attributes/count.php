<?php /** @noinspection PhpExpressionResultUnusedInspection */

use JetBrains\PhpStorm\ExpectedValues;

$array = [];

    function count(
        array|Countable $var,
        #[ExpectedValues([COUNT_NORMAL, COUNT_RECURSIVE])]
        int $mode = COUNT_NORMAL
    ) {

    }

    count($array, 42);



    count($array, mode: );











