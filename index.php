<?php

namespace Project;

use Project\Controllers\HomeController;
use Project\Controllers\MyProfileController;
use Project\Controllers\RegistrationController;
use Project\Controllers\ContactUsController;
use Project\Controllers\SignInController;
use Project\Controllers\AjaxController;

use Project\ViewRenderer;

require_once('vendor/autoload.php');

$homeController = new HomeController();
$contactusController = new ContactUsController();
$registrationController = new RegistrationController();
$signInController = new SignInController();
$myProfileController = new MyProfileController();
$ajaxController = new AjaxController();

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

    case '/updateMyCustomResult': {
        $ajaxController->updateMyCustomResult();
        break;
    }

    case '/testformview': {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/testformview.php');
        break;
    }

    default: {
        echo "The page doesn't exists";
    }
}