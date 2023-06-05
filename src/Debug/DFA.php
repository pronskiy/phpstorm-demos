<?php

function foo($a, $b, $s)
{
    echo "Start\n";
    if ($a == 1) {
        echo "This block will be executed.";
    }
    if ($b == 42) {
        echo 'This block will be greyed out during debugging,
              because it\'s never executed.' ;
    }
    if (is_integer($s)) {
        echo 'This one is also unreachable at runtime, 
              so it will be greyed out during debugging as well.' ;
    }
}

foo(1, 43, "foo");

