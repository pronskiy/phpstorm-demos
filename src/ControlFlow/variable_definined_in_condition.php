<?php

    $a = false;
    if ($a) {
        $x = 42;
    }
    if ($a) {
        echo $x;
    }

function string_or_error() {
    if (rand() % 10) {
        return "result";
    }
    return false;
}

string_or_error();


    function test()
    {
        if (rand() % 10) {
            throw new Exception();
        }

        return null;
    }

    function test2()
    {
        $var = test();


    }

$htmlPattern = $_GET['q'];

    class Qwe
    {
        public $var;

        public function getVar()
        {
            if (null !== $this->var) {
                return empty($this->var)
                    ? null
                    : $this->var;
            }

            return null;
        }
    }