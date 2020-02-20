<?php

namespace PHPSTORM_META {
    override(
        \ServiceManager::__get(0),
        map(
            [
                'foo' => \FooService::class,
            ]
        )
    );

    override(\A::doActionA(0), type(0));

    exitPoint(\customExitFunction());
}
