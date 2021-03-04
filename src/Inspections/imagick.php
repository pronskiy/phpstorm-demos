<?php

    $im = new Imagick();
    try {
        $im->setResolution(300, 300);
        $im->readImage( "test.pdf" );
    } catch (ImagickException $e) {
    }
