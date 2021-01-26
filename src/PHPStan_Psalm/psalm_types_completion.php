<?php /** @noinspection PhpDocDuplicateTypeInspection */

    /**
     * @template T1 of UserInterface
     * @psalm-type T2 = BasicUser
     * @psalm-import-type T3 from User
     *
     * @param T1&T2&T3 $t
     */
    function mirror(mixed $t): void
    {
    }








interface UserInterface
{

}
/**
 * @psalm-type User = array{id: string}
 */
function mirror2(): void
{
}