<?php

        function updateArray(): bool
        {
            $array = [];


            for ($i = 0; $i < PHP_INT_MAX; $i++) {
                $array[] = $i;
            }

            return true;
        }