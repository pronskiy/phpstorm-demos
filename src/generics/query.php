<?php

/**
 * @template R as object
 */
interface Query
{
}

final class Top10PlayersResult
{
    public array $players;

    public function __construct(array $players)
    {
        $this->players = $players;
    }
}

/**
 * @template-implements Query<Top10PlayersResult>
 */
final class Top10Players implements Query
{
}

/**
 * @template R as object
 * @psalm-param Query<R> $q
 * @return R
 */
function query(Query $q): object
{
    // ...
    throw new LogicException('Query handler does not exist');
}

echo count(query(new Top10Players())->players);