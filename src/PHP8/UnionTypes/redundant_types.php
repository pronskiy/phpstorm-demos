<?php

    function foo() : bool
{
    return false;
}



    function login(object|User $user) : bool
    {

        return !empty($user);
    }