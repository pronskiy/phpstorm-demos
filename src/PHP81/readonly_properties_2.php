<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace App\PHP81;

class User
{
    public readonly Data $data;
    public readonly string $email;

    public function __construct(
        public readonly string $name,
    ) {
        $this->data = new Data();
    }
}

//$user = new User('Nikita');
echo $user->name;            // Ok
$user->name = 'Roman';       // Error – cannot be changed after initialization

unset($user->name);

$user->data->prop = 'value'; // Ok – objects do not become immutable
$user->data = new Data();    // Error

$user->email = 'm@php.net';  // Error – can only be initialized in the same scope
                             //         where the property is declared
