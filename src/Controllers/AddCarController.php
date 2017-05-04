<?php

namespace Project\Controllers;

use Project\Services\AddCarService;

class AddCarController
{

    public function addCar()
    {
        $addCarService = new AddCarService();
        echo $addCarService->newCarValidator($_POST["carData"]);
    }
}