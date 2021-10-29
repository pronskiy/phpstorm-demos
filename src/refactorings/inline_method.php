<?php /** @noinspection PhpPropertyOnlyWrittenInspection */

/** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpMissingFieldTypeInspection */

class Entity
{
    private int $numberOfLateDeliveries;

    public function getRating(): int
    {
        return ($this->moreThanFiveLateDeliveries()) ? '👍' : '👎';
    }

    private function moreThanFiveLateDeliveries(): bool
    {
        return $this->numberOfLateDeliveries > 5;
    }
}