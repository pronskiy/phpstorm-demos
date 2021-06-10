<?php

function foo()
{
    if (random_int(0, 1)) {
        $a = 0;
        echo 42;
        echo $a + 42;
    }
}
