<?php

namespace App\PHPDoc;

class User
{
    public int $id;
    public string $name;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @param \App\PHPDoc\User $f
     * @throws \Exception
     */
    public function foo(self $f)
    {
        throw new \Exception();
    }
}
