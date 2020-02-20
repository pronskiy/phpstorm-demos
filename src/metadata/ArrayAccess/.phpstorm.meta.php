<?php

namespace PHPSTORM_META {
    override(
        new \metadata\ArrayAccess\ServiceManager(),
        map(
            [
                'log' => \Monolog\Logger::class,
                'foo' => \FooService::class,
            ]
        )
    );
}
