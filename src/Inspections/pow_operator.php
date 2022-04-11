<?php

    echo 2 ** 3; // 8

    $base = gmp_init(2);
    var_dump($base ** 3); // object(GMP)