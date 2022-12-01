<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\generics;

/**
 * @template T
 */
class MyContainer {
    /** @var T */
    private $value;

    /** @param T $value */
    public function __construct(mixed $value) {
        $this->value = $value;
    }

    /** @return T */
    public function getValue() {
        return $this->value;
    }
}

$c = new MyContainer(new DateTime());

//$c->getValue()->

class FooChild extends Foo {
    public function fooChildMethod() {}
}


    class Foo {
        public function bar() {}
    }

    function instantiate(string $class) {
        return new $class();
    }

    instantiate(Foo::class)->bar();





/**
 * @template T of Foo
 * @psalm-param class-string<T> $class
 * @return T
 */
function instantiator2(string $class)
{
    return new $class();
}

$r = instantiator2(FooChild::class);
$r->fooChildMethod();


/**
 * @template T
 * @param A<T> $t
 * @return A<T<C>>
 */
function mirror1($t) {
    return $t;
}
class B {}
$b = mirror1(new B());
$b->