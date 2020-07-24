<?php /** @noinspection PhpIllegalPsrClassPathInspection */

namespace App\Inspections;

    class Foo {
        public int $val;
        public string $bar;

        public function __construct(int $val) {
            $this->var = $val; // Ooops, typo
        }
    }

    $foo = new Foo(42);
    var_dump($foo->val); // TypeError
    var_dump($foo->bar); // TypeError


