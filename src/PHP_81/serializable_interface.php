<?php

    class Entity implements Serializable
    {
        private mixed $data;

        public function serialize(): ?string {
            return serialize($this->data);
        }
        public function unserialize($data) {
            $this->data = unserialize($data);
        }

        public function __serialize(): array
        {
            // TODO: Implement __serialize() method.
        }

        public function __unserialize(array $data): void
        {
            // TODO: Implement __unserialize() method.
        }
    }