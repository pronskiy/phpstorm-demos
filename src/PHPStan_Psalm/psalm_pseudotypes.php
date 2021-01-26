<?php /** @noinspection PhpMissingReturnTypeInspection */


    /**
     * @return scalar
     */
    function returnsScalar()
    {
//        $n = floor((float) $n);
        $array = [true, 1, 1.0, 'yes'];
        shuffle($array);

        return $array[0];
    }


    $scalar = returnsScalar();

    function takesObject(object $o): void
    {

    }

    takesObject($scalar);