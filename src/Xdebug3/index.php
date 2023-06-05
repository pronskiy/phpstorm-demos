<?php

class DTO {
    public function __construct(
        public string $prop
    ) { }
}


$dtos = [
	new DTO('Xdebug 3.1'),
	new DTO('PhpStorm 2023.1'),
	new DTO('PHP 8.2'),
];


foreach ($dtos as $dto) {
	dump($dto);
}

function dump(DTO $dto): void
{
	echo $dto->prop, PHP_EOL;
}
