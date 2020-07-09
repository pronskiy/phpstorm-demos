<?php declare(strict_types=1);

    class Foo
    {
        public void|Bar $bar;

        public function bar(void|Bar $b) :void|Bar {}
    }


    function foo(false|null $p) :false|null {
        $p++;
        return false;
    }