<?php

class BlogData
{
    public function __construct(
        public string $title,
        public ?BlogState $state = null,
    ) {
        $this->state ??= new Draft();
    }
}