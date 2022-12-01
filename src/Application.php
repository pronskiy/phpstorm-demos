<?php

namespace App;

class Application
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
