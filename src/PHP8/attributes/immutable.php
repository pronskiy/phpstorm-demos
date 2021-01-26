<?php

    use JetBrains\PhpStorm\Immutable;

#[Immutable]
class DTO_
{
    public string $val;

    public function __construct(string $val)
    {
        $this->val = $val;
    }
}

    $dto = new DTO_('foo');
    $dto->val = 'bar';
