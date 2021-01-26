<?php

class Point {
    public float $x;
    public float $y;
    public float $z;

    public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0,
    ) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Test {
    public $prop;

    // Error: Redeclaration of property.
    public $prop;

    public function __construct(
        $prop) {
        $this->prop = $prop;
    }
}

class Point2 {

    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
    ) {
    }
}

class Test2 {
    // Error: Using null default on non-nullable property
    public function __construct(public Test2 $prop = null) {}

    // Correct: Make the type explicitly nullable instead
    public function __construct(public ?Typepe $prop = null) {}
}