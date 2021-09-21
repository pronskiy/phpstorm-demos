<?php

//namespace App\generics\extends;

/**
 * @template T
 */
abstract class Base
{
    /**
     * @return T
     */
    public function item()
    {
    }

    /**
     * @return array<T>
     */
    abstract public function items();


    /**
     * @var T
     */
    public $item;
    /**
     * @var array<T>
     */
    public $items;
}

class P
{
    public function p(){}
}

/**
 * @extends Base<P>
 */
class Child extends Base
{
    public function items()
    {
    }
}

$child = new Child()->;
$child->items()[0]->


    /**
     * @template T
     */
    interface IRand
    {
        /**
         * @param T $min
         * @param T $max
         * @return T
         */
        public function rand($min, $max);
    }

    /**
     * @implements IRand<\DateTime>
     */
    class DateTimeFactory implements IRand
    {
        public function rand($min, $max)
        {
            //region ...
    //        $val = rand($a->getTimestamp(), $b->getTimestamp());
    //        return new DateTime($val);
            rand($min, $max);
            return;
            //endregion
        }
    }

    //    (new DateTimeFactory())->rand(0, 0)->


    /**
     * @template T
     */
    class Wrap {
        /** @param T $a */
        public function __construct(
             private mixed $a
        ) {}

        /** @return T */
        public function get() {
            return $this->a;
        }
    }

    /**
     * @extends Wrap<\DateTime>
     */
    class WrappedDateTime extends Wrap {
        public function __construct() {
            parent::__construct(new \DateTime());
        }
    }

    (new WrappedDateTime())->get()->





