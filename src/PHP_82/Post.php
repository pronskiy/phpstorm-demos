<?php

class Post
{
    public function __construct(
        public readonly string $title,
        public readonly string $author,
        public readonly string $body,
        public readonly DateTimeImmutable $createdAt,
        public readonly PostState $state,
    ) {}
}
