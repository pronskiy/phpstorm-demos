<?php /** @noinspection PhpUndefinedClassInspection */

$arr = [''];
$key = '';


    // Curly braces redundant:
    "Item: $arr[0]";
    "Item: $arr[$key]";
    "$arr[$key] world";
    "$this->prop";

    // Curly braces required:
    "{$this->prop[$key]}";
    "{$arr['aa']}";
    "{$arr[A::AA]}";