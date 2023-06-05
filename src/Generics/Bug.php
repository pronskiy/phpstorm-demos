<?php declare(strict_types = 1);

namespace App\Services\Recalculator;

class Bug {
    /**
     * @template T of \Exception
     * @param T $exception
     * @return T
     */
    public static function foo($exception): mixed {
        $exception;
    }
}

