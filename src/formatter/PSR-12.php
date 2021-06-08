<?php /** @noinspection ALL */

declare(strict_types=1);

namespace Vendor\Package;

class Foo extends Bar implements FooInterface
{
    public function sampleFunction(int $a, int $b = null): array
    {
        if ($a === $b) {
            if ($c) {
                bar();
            } else {
                baz();
            }
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public
    static function bar()
    {
        // method body
    }
}