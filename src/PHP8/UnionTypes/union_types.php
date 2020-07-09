<?php /** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */

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

            /**
             * @param int|float $number
             */
            public function setNumber(int|float $number)
            {
                $this->number = $number;
            }


        }



        $n = new Number();
        $n->setNumber('Not a number');

