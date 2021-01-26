<?php

{
    $result = match ('foo') {
        0 => "Oh no!\n",
        'foo' => "This is what I expected\n",
    };
    echo $result;








}