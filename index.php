<?php

namespace Project;

use Project\Controllers\HomeController;
use Project\Controllers\LoadCarsImagesController;
use Project\Controllers\MyProfileController;
use Project\Controllers\RegistrationController;
use Project\Controllers\ContactUsController;
use Project\Controllers\SignInController;
use Project\Controllers\AjaxController;
use Project\Controllers\SubmitRegistrationController;
use Project\Controllers\CarsMainController;
use Project\Controllers\CarsAddController;
use Project\Controllers\CarsModelsController;
use Project\Controllers\AddCarController;
use Project\Controllers\ShowCarsController;

require_once('vendor/autoload.php');

$homeController = new HomeController();
$contactusController = new ContactUsController();
$registrationController = new RegistrationController();
$signInController = new SignInController();
$myProfileController = new MyProfileController();
$ajaxController = new AjaxController();
$submitRegistrationController = new SubmitRegistrationController();
$carsMainController = new CarsMainController();
$carsAddController = new CarsAddController();
$carsModelsController = new CarsModelsController();
$addCarController = new AddCarController();
$showCarsController = new ShowCarsController();
$loadCarsImagesController = new LoadCarsImagesController();

switch ($_SERVER['REQUEST_URI']) {
    case '/': {
        $homeController->show();
        break;
    }

    case '/contactus': {
        $contactusController->show();
        break;
    }

    case '/registration': {
        $registrationController->show();
        break;
    }

    case '/signin': {
        $signInController->show();
        break;
    }

    case '/myprofile': {
        $myProfileController->show();
        break;
    }

    case '/cars': {
        $carsMainController->show();
        break;
    }

    case '/addcar': {
        $carsAddController->show();
        break;
    }

    case '/showcars': {
        $showCarsController->show();
        break;
    }

    case '/load-cars-images': {
        $loadCarsImagesController->loadImages();
        break;
    }

    case '/updateMyCustomResult': {
        $ajaxController->updateMyCustomResult();
        break;
    }

    case '/submitregistration': {
        $submitRegistrationController->register();
        break;
    }

    case '/updateCities' : {
        $ajaxController->loadCities($_POST['country']);
        break;
    }

    case '/updateLocation' : {
        $ajaxController->setLocation($_POST['location']);
        break;
    }

    case '/updateModels' : {
        $carsModelsController->updateModels($_POST['make']);
        break;
    }

    case '/submitcar': {
        $addCarController->addCar();
        break;
    }

    default: {
        echo "The page doesn't exists!";
    }
}