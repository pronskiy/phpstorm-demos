<?php

namespace {
    class MyClass{}
}

namespace Foo{
    use \MyClass; //this can be marked by inspection
    new MyClass();
}

