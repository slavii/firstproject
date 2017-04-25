<?php

namespace Project\Controllers;

use Project\Services\AddCarService;

class AddCarController
{

    public function addCar()
    {
        $addCarService = new AddCarService();
        $result = $addCarService->newCarValidator(
            $_POST["make"],
            $_POST["model"],
            $_POST["year"],
            $_POST["fuel"],
            $_POST["gears"],
            $_POST["price"]
        );
        echo $result;
    }

}