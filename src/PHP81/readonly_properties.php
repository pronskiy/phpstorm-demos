<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace App\PHP81;

    class User
    {
        public readonly string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }
    }

//    $user = new User('Nikita');
    echo $user->name;            // Ok
    $user->name = 'Roman';       // Error: Cannot modify readonly property
                                 //        after initialization






$user->data->prop = 'value'; // Ok – objects do not become immutable
$user->data = new Data();    // Error

$user->email = 'm@php.net';  // Error – can only be initialized in the same scope
                             //         where the property is declared
