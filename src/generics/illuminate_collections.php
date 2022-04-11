<?php /** @noinspection PhpUnusedLocalVariableInspection */

namespace App\generics;

    use App\User;


    use Illuminate\Support\Collection;

/**
 * @return Collection<int, User>
 */
function getUsers(): Collection {
	return collect([new User]);
}

$userEmail = getUsers()->get(0)->getEmail();


foreach (getUsers() as $user) {
		$user->
}




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
