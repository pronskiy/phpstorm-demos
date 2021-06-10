<?php

function bar($a, $b, $c)
{
    if ($b) {
        echo $a;
        echo $c;
    } else {
        echo $c;
        echo $a;
    }
}
