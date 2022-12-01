<?php /** @noinspection PhpExpressionResultUnusedInspection */

use App\User;

/**
 * Takes one array with keys and another with values and combines them
 *
 * @template TKey
 * @template TValue
 *
 * @param array<TKey> $arr
 * @param array<TValue> $arr2
 * @return array<TKey, TValue>
 */
function array_combine2(array $arr, array $arr2): array {}

$a = array_combine2(['key1', 'key2'], [new User, new User]);

$a['key1']->


//$users = [new User, new User];


//
//    /** @return array<int, User> */
//    function getUsers(): array {
//        return [];
//    }
//
//    getUsers()[0]->
