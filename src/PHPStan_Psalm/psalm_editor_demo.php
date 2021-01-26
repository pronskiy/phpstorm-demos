<?php


    // PhpStorm ≤2020.2

    /**
     * @psalm-return array<array-key, class-string<\Exception>>
     * @return array<array-key, class-string<\Exception>>
     */
    function getExceptions(): array
    {
        return [Exception::class];
    }