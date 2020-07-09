<?php declare(strict_types=1);

namespace P\P8;

    class A {}
    class B {}
    class C extends B {}
    class D extends C {}

    function f1(): bool|string {
        return new A(); // Highlighted only with strict_types=1
    }

    function f3(): A|B {
        return new D(); // Not highlighted because D is a subtype of B
    }

    function f2(): A|C|D {
        return new B(); // Always highlighted because B is not in the union
                        // although C and D are subtypes of B
    }


