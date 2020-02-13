<?php

namespace App\Command;

class StaticCommand
{
    public static function check()
    {
        $emojis = ['👍', '👌', '🤘'];
        $emoji = $emojis[array_rand($emojis)];
        echo "PhpStorm running composer.json script {$emoji}\n";
    }
}
