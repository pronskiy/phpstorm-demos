<?php /** @noinspection PhpLanguageLevelInspection */

use JetBrains\PhpStorm\ArrayShape;


    const USER_SHAPE = [
        'id'   => 'int',
        'name' => 'string',
        'foo'  => App\PHP8\Foo::class,
    ];
    #[ArrayShape(USER_SHAPE)]
    function user(): array
    {
        return [
            'id' => 1,
            'name' => '',
        ];
    }

    $u = user();
    $u['foo']->bar();


