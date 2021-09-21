<?php

class User{
    public function mymethod()
    {

    }
}

/**
 * @template-extends IteratorAggregate<int, User>
 */
class Collection implements ArrayAccess
{
}

class UserService
{
    /**
     * @return Collection<int, User>
     */
    function getUsers(): IteratorAggregate
    {
    }

    public function doSomething(): void
    {
        foreach ($this->getUsers() as $user) {
            $user->
        }
    }
}