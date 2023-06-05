<?php

function run() 
{
    global $argc;
    echo sprintf(
        "Number of CLI arguments: %d \n", 
        $argc - 1
    );
}

run();

