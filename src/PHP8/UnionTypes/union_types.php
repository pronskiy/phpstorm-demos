<?php /** @noinspection PhpIllegalPsrClassPathInspection */

/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */

declare(strict_types=1);

//class Num
//{
//    public int|float $num;
//}
//
//$n = new Num();
//$n->num = ('Not a number');



class Number
{
    private float|int $number;

    public function setNumber(int|float $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int|float
    {
        return $this->number;
    }
}






        $n = new Number();
        $n->setNumber('Not a number');

