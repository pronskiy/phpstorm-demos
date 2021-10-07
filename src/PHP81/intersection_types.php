<?php /** @noinspection PhpExpressionResultUnusedInspection */

namespace App\PHP81;

    function count_and_iterate(\Iterator&\Countable $value)
    {
        foreach($value as $val) {
            echo $val;
        }

        count($value);
    }



// TODO check completion

    class Foo {
        public function foo() {

        }
    }

    class Bar {
        public function bar() {

        }
    }

    function accepts_foobar(Foo&Bar $foobar) {
        $foobar->
    }

    class DTO
    {
        public Data&Foo|Bar $data;
    }





    /**
     * @param Foo&Bar $foobar
     */
    function accepts_foobar_phpdoc($foobar)
    {
        $foobar->
    }