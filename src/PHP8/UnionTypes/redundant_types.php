<?php

class User {}

        function fn1(): bool|false {
            return true;
        }

        function fn2(Foo|Foo $arg): int|string|INT {
            echo $arg;
            return 0;
        }

        function fn3(void $arg): string|void {

        }

        function fn4(null $arg): false {
            echo $arg;
            return false;
        }

        function fn5(object|User $user) {

        }
