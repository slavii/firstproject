<?php

namespace Project\Controllers;

use Project\LoadImages;

class LoadCarsImagesController
{
    public function loadImages()
    {
        $images = new LoadImages();

        echo json_encode($images);
    }
}