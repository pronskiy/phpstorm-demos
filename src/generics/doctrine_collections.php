<?php /** @noinspection PhpStatementHasEmptyBodyInspection */

/** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpPropertyOnlyWrittenInspection */

use App\User;


    use Doctrine\Common\Collections\Collection;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
     * @return Collection<int, User>
     */
    function getUsers(): Collection {
        return new ArrayCollection([]);
    }

    foreach (getUsers() as $user) {
        $user->
    }




//$userEmail = getUsers()->get(0)->getEmail();











foreach ($app->getUsers() as $user) {
    $user->
}