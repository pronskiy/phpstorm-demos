<?php /** @noinspection PhpMissingVisibilityInspection */

/** @noinspection PhpUndefinedClassInspection */

/** @noinspection PhpIllegalPsrClassPathInspection */

    class C {
        const A_1 = 1;
        const A_2 = 2;
        const A_3 = 'test';
    }

    function f($a, $b): void {
        /** @psalm-var C::A_* $a */


        echo $a;

        /** @psalm-var C::A_1|C::A_2 $b */


        echo $b;
    }