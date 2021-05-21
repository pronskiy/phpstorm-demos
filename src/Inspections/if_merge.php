<?php

$a = rand();
$x = rand();
{
    echo $a;
    if ($a) {
        echo 1;
    }
}

{
    if ($a || $x) {
        $b = 1;
    }
}