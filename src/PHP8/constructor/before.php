<?php

    class Point
    {

        public float $z = 0.0;
        public float $y = 0.0;
        public float $x = 0.0;

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