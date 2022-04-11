    <?php

    $array = ['some_key' => true];

    var_dump(array_merge($array, ['some_key' => false]));
    // ['key' => bool(false)]

    var_dump($array + ['some_key' => false]);
    // ['some_key' => bool(true)]