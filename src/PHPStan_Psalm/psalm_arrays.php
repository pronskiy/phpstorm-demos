<?php /** @noinspection PhpIllegalPsrClassPathInspection */

class User
{
    public function getFullName(): string
    {
        return '';
    }
}

    /**
     * @return array<array-key, User>
     */
    function returnsArray(): array
    {
        return [

        ];
    }

    foreach (returnsArray() as $k => $user)
    {
        $user->getFullName();
    }