<?php /** @noinspection PhpMultipleClassesDeclarationsInOneFile */

/** @noinspection PhpInconsistentReturnPointsInspection */

declare(strict_types=1);

namespace PHP8;

    class A {}
    class B extends A {}
    class Foo {
        public function param1(B|string $param) {}
        public function param2(A|string $param) {}
        public function param3(int $param) {}
        public function param4(int|float $param) {}
    }
    class Bar extends Foo {
        public function param1(A|string $param) {} // ✅ Widening union
        public function param2(B|string $param) {} // 🚫 Restricting union



        public function param3(int|float $param) {} // ✅ Adding extra type
        public function param4(int $param) {}       // 🚫 Removing type
    }


//    class A {}
//    class B extends A {}
//    class Foo {
//        public function return1(): A|string {}
//        public function return2(): B|string {}
//        public function return3(): int|float {}
//        public function return4(): int {}
//    }
//    class Bar extends Foo {
//        public function return1(): B|string {}     // Allowed: Restricting union member A -> B
//        public function return2(): A|string {}     // FORBIDDEN: Widening union member B -> A
//
//
//
//        public function return3(): int {}           // Allowed: Removing return type
//        public function return4(): int|float {}     // FORBIDDEN: Adding extra return type
//    }


//    class A {}
//    class B extends A {}
//
//    class C {
//        public A|B $prop1;
//        public A|B $prop2;
//    }
//    class C2 extends C {
//        public A $prop1;           // Allowed: Because A includes A|B
//        public A|B|int $prop2;     // FORBIDDEN: Cannot change the union
//    }