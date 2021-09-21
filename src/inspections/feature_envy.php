<?php

class A
{
    public function a1() {}

    public function envy(B $b)
    {
        $this->a1();
        $b->b1();
        $b->b2();
        $b->b3();
        if ($b->b4()) {
            $b->b5();
            $b->b6();
            $b->b7();
            $b->b8();
            $b->b9();
        }

    }
}

class B
{
    public function b1() {}
    public function b2() {}
    public function b3() {}
    public function b4() {}
    public function b5() {}
    public function b6() {}
    public function b7() {}
    public function b8() {}
    public function b9() {}
}