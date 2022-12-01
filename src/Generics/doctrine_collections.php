<?php /** @noinspection PhpStatementHasEmptyBodyInspection */

/** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpPropertyOnlyWrittenInspection */

use App\User;
    use Doctrine\Common\Collections\ArrayCollection;


    use Doctrine\Common\Collections\Collection;

    /**
     * @return Collection<int, User>
     */
    function getUsers(): Collection {
        return new ArrayCollection([]);
    }

    foreach (getUsers() as $user) {
        echo $user->getEmail();
    }




//$userEmail = getUsers()->get(0)->getEmail();











foreach ($app->getUsers() as $user) {
    $user->
}