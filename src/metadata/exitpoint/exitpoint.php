<?php

namespace metadata\exitpoint;

class Application
{
    public function terminate()
    {
        exit();
    }

    public function run()
    {
        echo "Hello";

        $this->terminate();

        echo " world!";
    }
}

