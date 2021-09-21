<?php /** @noinspection PhpUnusedSwitchBranchInspection */
/** @noinspection PhpUnusedMatchConditionInspection */
$int = random_int(1, 5);
{
    echo 'case: ';
    echo match ($int) {
        1 => 'one',
        2 => 'two',
        default => 'default',
    };
}