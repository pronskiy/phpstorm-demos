<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection PhpUndefinedClassInspection */

/** @noinspection PhpIllegalPsrClassPathInspection */

/** @noinspection PhpMultipleClassesDeclarationsInOneFile */


    /**
     * @template T
     * @param T $t
     * @return T
     */
    function mirror(mixed $t) {
        return $t;
    }

    $a = [];

    $b = mirror($a); // We know know the result type

    count($b);