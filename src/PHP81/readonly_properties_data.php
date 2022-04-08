<?php /** @noinspection PhpObjectFieldsAreOnlyWrittenInspection */
/** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace App\PHP81;

    class User
    {
        public readonly string $email;
        public function setEmail(string $email) {
            $this->email = $email;
        }
    }

//    $user = new User();
    $user->email = 'm@php.net';  // Error – can only be initialized from
                                 // the same scope where the property is declared

    $user->setEmail('m@php.net'); // Ok
