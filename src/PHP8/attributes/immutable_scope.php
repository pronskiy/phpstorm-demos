<?php

use JetBrains\PhpStorm\Immutable;

    class DTO2
    {
        #[Immutable(
            Immutable::PRIVATE_WRITE_SCOPE
        )]
        public string $val;

        public function __construct(string $val)
        {
            $this->val = $val;
        }

        public function computeVal(): void
        {
            $this->val = 'value';
        }
    }

    $dto = new DTO('foo');
    $dto->val = 'bar';