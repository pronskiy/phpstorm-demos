<?php

namespace App\Refactorings;

use App\Refactorings\Baz;

class FooBar
{

    /** @var Baz */
    private $baz;

    public function __construct(
    )
    {
        $this->baz = new Baz(
        );
    }

    public function methodToMove()
    {
        $this->baz->methodToMove(
        );
    }
}
