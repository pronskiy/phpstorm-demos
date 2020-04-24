<?php /** @noinspection PhpIllegalPsrClassPathInspection */



    class Util
    {
        public function print(&$item)
        {
            echo $item;
        }
    }







    foreach ($array as $k => &$v) {
        echo $v;
    }
