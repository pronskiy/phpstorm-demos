<?php /** @noinspection PhpUndefinedClassInspection */

    class DTO
    {

        public string $prop;

        public function __construct(string $prop) {
            $this->prop = $prop;
        }
    }