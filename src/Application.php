<?php

namespace App;


    use JetBrains\PhpStorm\NoReturn;

    class Applicationr
    {
        #[\JetBrains\PhpStorm\NoReturn]
        public function terminate(): void {
            exit();
        }

        public function run(): void
        {
            echo 'Hello world!';

            $this->terminate();

            echo 'Good bye.'; // <-- Dead code
        }
    }
