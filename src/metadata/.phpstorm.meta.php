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
}
