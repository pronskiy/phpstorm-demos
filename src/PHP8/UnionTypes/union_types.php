<?php declare(strict_types=1);

class Number
{
    /** @var int|float $number */
    private $number;

    /**
     * @return int|float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int|float $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}


$n = new Number();
$n->setNumber('Not a number');













