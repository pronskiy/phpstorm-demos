<?php


    $a = random_int(0, 50);

    if ($a > 0 && $a > 42) {
        echo 'yay';
    }

class SomeClass {

}

class AnotherClass extends SomeClass {

}

function getObj(): SomeClass{

}
    $obj = getObj();



    if ($obj instanceof AnotherClass) {
        echo 'yay';
    }