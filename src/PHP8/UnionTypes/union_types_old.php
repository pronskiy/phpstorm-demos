<?php declare(strict_types=1);

namespace php8;
class Number
{
    /** @var int|float $number */
    private $number;

    /**
     * @param int|float $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}

$n = new Number();
$n->setNumber('Not a number'); // <--- No validation here







