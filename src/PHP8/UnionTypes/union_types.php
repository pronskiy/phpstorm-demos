<?php declare(strict_types=1);

class Number
{
    private int|float $number;

    public function setNumber(int|float $number): void
    {
        $this->number = $number;
    }

    public function getNnmber() : int|float
    {
        return '';
    }
}

$n = new Number();
$n->setNumber('Not a number');











