<?php

$string = '';

    // PHP 5-7
    htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

    // PHP 8
    htmlspecialchars($string, double_encode: false);

