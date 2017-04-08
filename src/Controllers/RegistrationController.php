<?php

namespace Project\Controllers;

use Project\ViewRenderer;
use Project\Services\UserService;

class RegistrationController
{

    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/registration.php');

        if (isset($_POST["submit"])) {
            $userService = new UserService();
            $userService->newUserValidator(
                $_POST["login"],
                $_POST["password"],
                $_POST["repassword"],
                $_POST["first-name"],
                $_POST["last-name"],
                $_POST["email"],
                $_POST["phone"],
                $_POST["url"]
            );
        }
    }
}