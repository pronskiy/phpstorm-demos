<?php

namespace PHPSTORM_META {
    override(
        \ServiceManagertest::__get(0),
        map(
            [
                'foo' => \FooService::class,
            ]
        )
    );
}
