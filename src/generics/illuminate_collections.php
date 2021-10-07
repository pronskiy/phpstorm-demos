<?php /** @noinspection PhpUnusedLocalVariableInspection */

namespace App\generics;

    use App\User;


    use Illuminate\Support\Collection;

    /**
     * @return Collection<int, User>
     */
    function getUsers(): Collection {
        return Collection::make([new User]);
    }

    $userEmail = getUsers()->get(0)->getEmail();






class User
{
//    public string $name;
    private string $email;

    public function getEmail()
    {
        return $this->email;
    }
}


foreach (getUsersCollection() as $user) {
    $user->
}

getUsersCollection()->map(function($key, $value) {
});
