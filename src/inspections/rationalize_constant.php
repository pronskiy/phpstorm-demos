<?php

    class BaseClass
    {
        const BASE_CONST = 42;
    }

    class SubClass extends BaseClass {

    }

    echo BaseClass::BASE_CONST;