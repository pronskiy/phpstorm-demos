<?php

/**
 * @param mixed $arg
 */
function foo2(mixed $arg)
{

}


class C
{
    public function bar(): int {}
}

class D extends C
{
    // return type cannot be widened from int to mixed
    // Fatal error thrown
    public function bar(): mixed {}
}