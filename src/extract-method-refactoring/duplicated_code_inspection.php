<?php

function sortArray($array): array
{
    // sort array insertion sort
    return sortArrayInsertionSort($array);
}

function sortArrayInsertionSort($array): mixed
{
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
    return sortArrayInsertionSort($items);
}







