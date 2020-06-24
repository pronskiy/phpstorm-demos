<?php

/**
 * @param StdClass | Callable $param
 */
function complexType($param) :void
{
    if ($param instanceof StdClass)
    {
        return;
    }

    $x = $param;
}