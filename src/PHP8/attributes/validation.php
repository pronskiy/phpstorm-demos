<?php
namespace App\PHP8;

    use Attribute;


    class NewAttribute
    {
    }

    #[NewAttribute]
    #[NewAttribute]
    class Foo
    {
        public function bar()
        {

        }
    }










var_dump((new \ReflectionClass(Foo::class))->getAttributes()[0]->newInstance());

    class FooBar {
        #[NonNegative]
        public int $x, $y, $z;
    }