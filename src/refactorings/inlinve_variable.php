<?php

class Foo
{

    public function isExpensive()
    {


        $basePrice = $order->basePrice();
        return $basePrice > 1000;
    }
}