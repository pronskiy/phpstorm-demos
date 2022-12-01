<?php

    $name = 'PHP 8.2';
    
    echo "Hello {$name}";

    
var_dump("self::method"());
"parent::method"();
"static::method"();
["self", "method"]();
["parent", "method"]();
["static", "method"]();
["Foo", "Bar::method"]();
[new Foo, "Bar::method"]();


class Bar {
    static function staticMethod() { echo "Bar::staticMethod"; }
    function method() { echo "Bar::method"; }
}

class Foo extends Bar
{

    function deprecations()
    {
        $this->call(self::staticMethod(...));
        $this->call(parent::staticMethod(...));
        $this->call(static::staticMethod(...));
        $this->call(self::method(...));
        $this->call(parent::method(...));
        $this->call(static::method(...));
        $this->call(["Foo", "Bar::method"]);
        $this->call([new Foo, "Bar::method"]);
    }
    function call(callable $c) { $c(); }

    static function staticMethod() { echo "Foo::staticMethod"; }
    function method() { echo "Foo::method"; }

}

(new Foo())->deprecations();


    "printf"('Hello World');
    "Foo::method"();
    [new Foo, "method"]();

    
    
    
