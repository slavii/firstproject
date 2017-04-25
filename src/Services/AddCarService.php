<?php

namespace Project\Services;

use Project\AddCar;

class AddCarService
{

    public function newCarValidator($make, $model, $year, $fuel, $gears, $price)
    {
        if ($make == "") {
            return 0;
        } else if ($model == "") {
            return 0;
        } else if ($year == "") {
            return 0;
        } else if ($fuel == "") {
            return 0;
        } else if ($gears == "") {
            return 0;
        } else if ($price == "") {
            return 0;
        }

        new AddCar(
            $make,
            $model,
            $year,
            $fuel,
            $gears,
            $price
        );

        echo "Yes";
    }

}
