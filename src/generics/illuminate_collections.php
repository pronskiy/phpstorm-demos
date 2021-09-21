<?php

namespace App\generics;

use Illuminate\Support\Collection;

class User
{
    public string $name;
    private string $email;

    public function getEmail()
    {
        return $this->email;
    }
}


/** @return array<int, User> */
function getUsers(): array
{
    return [new User];
}

/** @return Collection<int, User> */
function getUsersCollection(): Collection
{
    return Collection::make([new User]);
}


$users = getUsersCollection()->get(0)->;