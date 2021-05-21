<?php /** @noinspection PhpUnusedLocalVariableInspection */


    $isSomething = isSomething() && true;



    $boolean = true && !true;







    function isSomething() :bool{
        return boolval(rand(0,1));
    }
