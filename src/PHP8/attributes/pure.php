<?php

    use JetBrains\PhpStorm\Pure;

    #[Pure]
    function compare(Foo $a, Foo $b): int
    {

        $a->c = 0;
        return $a->a <=> $b->b;
    }







    class Foo {
        public int $a, $b, $c;
    }







#[Pure]
function array_merge(...$arrays)
{

}


    $array1 = ["color" => "red", 2, 4];
    $array2 = ["a", "b", "color" => "green", 4];

    array_merge($array1, $array2);

