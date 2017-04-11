<?php

namespace Project\Controllers;

use Project\Services\UserService;

class SubmitRegistrationController
{

    public function register()
    {
        $userService = new UserService();
        $result = $userService->newUserValidator(
            $_POST["login"],
            $_POST["password"],
            $_POST["repassword"],
            "",
            "",
            "",
            "",
            ""
        );
        echo $result;
    }

}