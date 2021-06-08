<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class User {
    public function __construct(
        public ID $id,
        public string $name,
        public DateTimeImmutable $birthdate,
        public array $skills,
    ) {}
}