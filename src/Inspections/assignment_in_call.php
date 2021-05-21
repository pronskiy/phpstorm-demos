<?php /** @noinspection PhpUnusedLocalVariableInspection */

namespace App\Inspections;

class C
{
    public function check($item, $array)
    {
        $isInArray = in_array($item, $array, $strict = true);

        //region ...
        echo $isInArray;
        //endregion
    }
}


$isInArray = in_array($item, $array, $strict = true);