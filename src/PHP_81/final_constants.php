<?php

namespace App\PHP_81\FC;

class Foo
{
    final public const XX = "foo";
}

class Bar extends Foo
{
//    public const XX = "bar";
}



interface I
{
    public const XX = "i";
}

class C implements I
{
    public const XX = "c"; // Overriding is possible in PHP 8.1
}
