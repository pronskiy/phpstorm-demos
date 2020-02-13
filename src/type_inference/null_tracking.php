<?php
declare(strict_types=1);

class Foo
{
    static function bar(string $bar) :void
    {
    }

    static function baz() :void
    {
        for ($i = 0, $bar = null;; $i++) {
            switch ($i) {
                case 0:
                    $bar = 'string';
                    break;
                case 1:
                    if ($bar !== null) {
                        self::bar($bar); // No warnings here
                                         // because PhpStorm knows that $bar is not null
                    }
            }
        }
    }
}
