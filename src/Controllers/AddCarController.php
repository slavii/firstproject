<?php

namespace Project\Controllers;

use Project\Services\AddCarService;

class AddCarController
{

    public function addCar()
    {
        $addCarService = new AddCarService();
        $result = $addCarService->newCarValidator(
            $_POST["carData"]
        );
        echo $result;
    }

}