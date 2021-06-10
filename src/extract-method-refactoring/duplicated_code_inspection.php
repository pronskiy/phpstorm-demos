<?php

function insertionSort($array): array
{
    for ($i = 0; $i < count($array); $i++) {
        $val = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $val) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $val;
    }
    return $array;
}


function sortAndEcho($items)
{
    for ($i = 0; $i < count($items); $i++) {
        $val = $items[$i];
        $j = $i - 1;
        while ($j >= 0 && $items[$j] > $val) {
            $items[$j + 1] = $items[$j];
            $j--;
        }
        $items[$j + 1] = $val;
    }

    echo var_export($items, true);
}







