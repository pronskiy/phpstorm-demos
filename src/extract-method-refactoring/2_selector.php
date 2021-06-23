<?php /** @noinspection PhpUnhandledExceptionInspection */

// 1. Increase success rate (recap, shown on last demo)


// Selector with expressions and statements
function foo()
{
    if (random_int(0, 1)) {
        $a = 15;
        echo 42;
        echo $a + 42;
    }
}

// BUG: don't add empty statement <-- !!!
// Assignment extraction
if (true) {
    $a = 42 + 42 + 42;
}
