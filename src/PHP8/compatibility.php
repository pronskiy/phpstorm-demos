<?php

    $sub = substr('abcdef', 4, -4);
    if ($sub === false) {
        echo 'PHP 7.4 and lower';
    } else {
        echo 'PHP 8.0 and above';
    }
