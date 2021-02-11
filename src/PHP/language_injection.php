<?php
$subject = '';


    $pattern = "/^PhpStorm\s\d{4}\.\d$/"; // RegExp injected automatically
    preg_match($pattern, $subject);






    class Checker
    {
        const VERSION_REGEXP = "/^PhpStorm\s\d{4}\.\d$/";

        public function check($subject)
        {
            preg_match(self::VERSION_REGEXP, $subject);
        }
    }
