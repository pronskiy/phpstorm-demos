<?php

    $arr = [1, 2, 3];

    class Key {}

    $arr[new Key()]; // Warning in PHP 7.4 and below
                     // Error in PHP 8.0