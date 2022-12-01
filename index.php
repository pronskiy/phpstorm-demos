<?php


    array_reduce(
        [
            'title' => 'PhpStorm 2022.3', 'url' => 'https://www.jetbrains.com/phpstorm'
            // ...
        ], fn($v1, $v2) => $v1 . "\n" . "[{$v2['title']}]({$v2['url']})", 
        ''
    );
