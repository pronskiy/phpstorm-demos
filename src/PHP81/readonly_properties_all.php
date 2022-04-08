<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace App\PHP81;

    class User
    {
        public readonly Data $data;
        public readonly string $email;
        public readonly $birthdate; // Readonly property must have type

        public function __construct(public readonly string $name) {
        }
        public function setEmail(string $email) {
            $this->email = $email;
        }
    }

//    $user = new User('Nikita');
    echo $user->name;            // Ok
    $user->name = 'Roman';       // Error: Cannot modify readonly property
                                 //        after initialization

    $user->data->prop = 'value'; // Ok: Objects do not become immutable
    $user->data = new Data();    // Error

    $user->email = 'm@php.net';  // Error: Can only be initialized from the
                                 // same scope where the property is declared

    $user->setEmail('m@php.net');// Ok: Modified from the same scope


    class DTO
    {
        public readonly mixed $prop;

        public function __construct() {
            $this->prop = '';
        }
    }







