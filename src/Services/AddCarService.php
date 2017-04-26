<?php

namespace Project\Services;

use Project\AddCar;

class AddCarService
{

    public function newCarValidator($arr = [])
    {
        foreach ($arr as $item) {
            if ($item == "") {
                return 0;
            }
        }

        new AddCar($arr);

        echo "Yes";
    }

}
