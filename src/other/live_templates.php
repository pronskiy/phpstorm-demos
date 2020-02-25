<?php
declare(strict_types=1);

namespace App\Models;

class Time
{
    private int $hours, $minutes;

    public function __construct(int $hours, int $minutes)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public static function fromString(string $time) :Time
    {
        [$h, $m] = explode($time, ':', 2);
        return new Time($h, $m);
    }
}

/*
<template name="ncons" value="public static function $NAME$($PARAMS$) :$CLASS_NAME$&#10;{&#10;    $END$&#10;    return new $CLASS_NAME$();&#10;}" description="Named constructor" toReformat="false" toShortenFQNames="false">
  <variable name="NAME" expression="" defaultValue="" alwaysStopAt="true" />
  <variable name="PARAMS" expression="" defaultValue="" alwaysStopAt="true" />
  <variable name="CLASS_NAME" expression="phpClassName()" defaultValue="" alwaysStopAt="false" />
  <context>
    <option name="PHP Class Member" value="true" />
  </context>
</template>
 */
