<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

    function createException(): Exception {
        return new Exception();
    }

    // expect a warning here!
    createException();

    // at least warns of unused expression
    new Exception();
