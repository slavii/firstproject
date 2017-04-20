<?php

namespace Project\Controllers;

use Project\Services\CarModelService;

class CarsModelsController
{
    public function updateModels($make)
    {
        $models = new CarModelService();
        $result = $models->loadModelId($make);

        echo json_encode($result);
    }
}