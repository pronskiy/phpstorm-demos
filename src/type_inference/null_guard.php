<?php

class Controller
{
    public function action()
    {
        $foo = rand(0, 1) ? 1 : null;

        if ($foo === null) {
            return;
        }

        echo $foo;
    }

    public function action2(?int $param)
    {
        if ($param === null) {
            return;
        }

        echo $param;
    }
}



