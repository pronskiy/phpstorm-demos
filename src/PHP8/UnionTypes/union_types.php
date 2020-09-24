<?php /** @noinspection PhpIllegalPsrClassPathInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
declare(strict_types=1);




        class Number
        {
            private int|float $number;

            public function setNumber(int|float $number) {
                $this->number = $number;
            }

            public function getNumber(): int|float {
                return $this->number;
            }
        }








    $n = new Number();
    $n->setNumber('Not a number');

 