<?php

namespace Project\Services;

use Project\AddCar;
use Project\AddCarImage;

class AddCarService
{

    public function newCarValidator($carData = [])
    {
        foreach ($carData as $item) {
            if ($item == "") {
                return 0;
            }
        }

        new AddCar($carData);

        $img = new AddCarImage();
        $img->upload();

        echo "Yes";
    }

}