<?php

class Bar
{
    public function test()
    {

    }
}

/**
 * @template T
 */
class Attributes
{

    /** @var class-string<T> */
    private string $className;

    /**
     * @param class-string<T> $className
     */
    public function __construct(string $className) { $this->className = $className; }

    /**
     * @template TInput
     * @param class-string<TInput> $className
     * @return static<TInput>
     */
    public function setType(string $className)
    {
        $this->className = $className;

        /** @var static<TInput> $this */
        return $this;
    }

    /**
     * @return T
     */
    public function newInstance()
    {
        $object = new $this->className;

        return $object;
    }
}

//$a = new Attributes(Bar::class);
$a = new Attributes(Bar::class);
$a->setType(Bar::class);
$b = $a->newInstance();
$b->