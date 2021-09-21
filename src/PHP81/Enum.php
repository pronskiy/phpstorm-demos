<?php

class Enum
{

}


enum Status: int
{
    case draft = 1;
    case published = 2;

    public static function color(): string
    {
        return match ($this) {
            self::
        }
    }
}

