<?php /** @noinspection PhpIllegalPsrClassPathInspection */

namespace App\Inspections;



        class Foo
        {
            public int $baz;
        }

        $foo = new Foo();
        var_dump($foo->baz); // TypeError


