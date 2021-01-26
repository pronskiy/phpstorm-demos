<?php /** @noinspection PhpMultipleClassesDeclarationsInOneFile */

declare(strict_types = 1);

class NotFoundException extends LogicException {}

/**
 * Collection generic template
 *
 * @template V
 */
class Collection
{
    /**
     * @var array<int|string, V>
     */
    private array $items = [];

    /**
     * @param array<int|string, V> $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @param int|string $key
     * @param V $item
     */
    public function set($key, $item): void
    {
        $this->items[$key] = $item;
    }

    /**
     * @param V $item
     */
    public function push($item): void
    {
        $this->items[] = $item;
    }

    /**
     * Returns an item from collection for given key
     *
     * @param string|int $key
     * @return V
     */
    public function get($key)
    {
        return $this->items[$key];
    }

    /**
     * Checks if current collection has an item with given key
     *
     * @param int|string $key
     */
    public function has($key): bool
    {
        return isset($this->items[$key]);
    }

    /**
     * Checks if collection is empty
     */
    public function isEmpty(): bool
    {
        return count($this->items) === 0;
    }
}


/**
 * @template T
 */
class Repository
{
    private string $className;

    /**
     * @param class-string<T> $className
     */
    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * Finds an entities by specification
     * @param T $p
     * @return T
     */
    public function find(mixed $p): mixed
    {
        // Here we should have a DB logic for searching + returning set of items
//        return new Collection();
    }

    /**
     * Returns exactly once entity or fail
     *
     * @throws NotFoundException
     * @return T
     */
    public function requireOne(/* Specification */)
    {
        // Here we should have a DB logic for searching + mapping to repo entity class
        return new $this->className;
    }
}

class FirstEntity
{
    public int $foo = 42;
}

class SecondEntity
{
    public int $bar = 100500;
}

$firstRepo = new Repository(FirstEntity::class);
echo $firstRepo->requireOne(/* specification */)->;

$secondRepo = new Repository(SecondEntity::class);
$items = $secondRepo->find(SecondEntity::class)->;