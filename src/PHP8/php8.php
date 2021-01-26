<?php

#[BarAttribute]
class FooBar
{
    public function __construct(
        public int $bar = 8,
        public string $baz = 'baz',
    ) {}
}








//#[Attribute]
class BarAttribute
{

}