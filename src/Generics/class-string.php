<?php /** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpUndefinedFunctionInspection */

use App\User;

//*

    /**
     * Load all previously persisted objects from disk.
     *
     * @template T
     * @param class-string<T> $className
     * @return array<T>
     */
    function loadAllObjects(string $className): array {
        $databaseFilePath = self::determineDatabaseFilePathFor($className);

        if (!file_exists($databaseFilePath)) {
            return [];
        }

        $objects = Serializer::deserialize("{$className}[]", file_get_contents($databaseFilePath));

        Assertion::allIsInstanceOf($objects, $className);

        return $objects;
    }

    loadAllObjects(Foo::class)[0]->



    /**
     * @template T
     * @param class-string<T> $className
     * @return T
     */
    function loadObject(string $className): object {
        $databaseFilePath = self::determineDatabaseFilePathFor($className);

        if (!file_exists($databaseFilePath)) {
            return [];
        }

        $objects = Serializer::deserialize("{$className}[]", file_get_contents($databaseFilePath));

        Assertion::allIsInstanceOf($objects, $className);

        return $objects;
    }

    loadObject(User::class)->getEmail();