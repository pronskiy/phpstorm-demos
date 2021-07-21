<?php

function sortArray($array): array
{
    // sort array insertion sort
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
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

function sortItems($items)
{
    $count = count($items);
    for ($i = 0; $i < $count; $i++) {
        $val = $items[$i];
        $j = $i - 1;
        while ($j >= 0 && $items[$j] > $val) {
            $items[$j + 1] = $items[$j];
            $j--;
        }
        $items[$j + 1] = $val;
    }
    return $items;
}







