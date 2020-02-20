<?php

class Maker
{
    public function make($params, $className)
    {
        return new $className(...$params);
    }
}

class Party
{
    public function start()
    {
        echo '🕺';
    }
}

(new Maker())->make([], Party::class);
