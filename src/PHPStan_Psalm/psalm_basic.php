<?php

    /**
     * @param int $i
     * @return array<string>
     */
    function takesAnInt(int $i): array
    {
        return [$i, "hello"];
    }

    $data = ["some text", 5];
    takesAnInt($data[0]);




    $condition = rand(0, 5);
if ($condition) {
} elseif ($condition) {}