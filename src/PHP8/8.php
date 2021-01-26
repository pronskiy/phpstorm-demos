<?php

    try {
        process();
    } catch (Exception) {
        echo "Intention is clear";
    }



    $obj = new User();
    echo $obj::class;

    $object = null;
    echo $object::class;



    function run ($longVar, $longerVar, $muchLongerVar,) { }
















function process()
{
    throw new PermissionException();
}