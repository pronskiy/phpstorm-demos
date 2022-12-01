<?php /** @noinspection PhpStatementHasEmptyBodyInspection */

/** @noinspection PhpPureAttributeCanBeAddedInspection */

use App\generics\User;

abstract class Animal {
    abstract public function getNoise() : string;
}
class Dog extends Animal {
    public function getNoise() : string { return "woof"; }
}
class Cat extends Animal {
    public function getNoise() : string { return "miaow"; }
}

    /**
     * @template T
     */
    class Collection
    {
        /** @var array<int, T> */
        public array $items;

        /** @return T */
        public function get(int $key): mixed {
            return $this->items[$key];
        }
    }

    /** @return Collection<User> */
    function getUsers(): Collection {
        return new Collection();
    }

    foreach (getUsers() as $user) {
        $user->
    }







    /** @param Collection<User> $collection */
    function printUsers(Collection $collection)
    {
        foreach ($collection->list as $user) {
            echo $user->;
        }
    }



    /** @var Collection<User> $usersCollection */
//    $usersCollection = new Collection();

//    $usersCollection->get(0)->
    foreach ($usersCollection as $user) {
//        $user->
    }





/**
 * @param Collection<Animal> $collection
 */
function getNoises(Collection $collection) : void {
    foreach ($collection->list as $animal) {
        echo $animal->getNoise();
    }
}

/**
 * @param Collection<Dog> $dog_collection
 */
function takesDogList(Collection $dog_collection) : void {
    getNoises($dog_collection);
}