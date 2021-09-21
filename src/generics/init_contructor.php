<?php /** @noinspection PhpDocSignatureInspection */


declare(strict_types=1);

use App\User;


    /** @template T */
    class Map
    {
        /** @param T $item */
        public function __construct(mixed $item) {
        }

        /** @return T|null */
        public function first(): mixed {
            return;
        }
    }

    $map = (new Map(new User));
    $map->first()->getEmail();