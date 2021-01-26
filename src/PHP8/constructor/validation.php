<?php

//    class Foo {
//        public string $prop;
//
//        public function __construct(
//            public $prop,
//
//
//            public callable $callback,
//
//
//            public string ...$strings,
//        ) {}
//    }



    class Foo {
        public function method(
            public $arg
        ) {}
    }

    abstract class Bar {
        abstract public function __construct(
            private $baz
        );
    }










