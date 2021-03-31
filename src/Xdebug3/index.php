<?php

class DTO {
    public function __construct(
        public string $prop
    ) { }
}


$dtos = [
    new DTO('Xdebug 3'),
    new DTO('PhpStorm'),
    new DTO('PHP 8'),
];


foreach ($dtos as $dto) {
    echo $dto->prop, "\n";
}
