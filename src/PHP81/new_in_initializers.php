<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpMethodParametersCountMismatchInspection */

/** @noinspection PhpPropertyOnlyWrittenInspection */

namespace Assert;
class NotNull {}
class Length {}
#[\Attribute]
class All {}

namespace App\PHP81;

class Foo {}

class Logger {}
class NullLogger extends Logger {}
class Service {}
class DefaultService extends Service {}

static $x = new Foo();
const C = new Foo();

    class Action
    {
        #[\Assert\All(
            new \Assert\NotNull,
            new \Assert\Length(min: 6))
        ]
        public array $name = [];

        public function __construct(
            private Logger $logger = new NullLogger()
        ) {

        }

        public function run(
            Service $service = new DefaultService()
        ) {
            //region ...

    //endregion
        }
    }

    const ACTION = new Action();


    class FooBar
    {
        public Service $service = new Service();


        const ACTION =  new Action();

    }
