<?php

namespace Project\Controllers;

use Project\Services\UserService;

class SubmitRegistrationController
{
    public function register()
    {
        $userService = new UserService();
        $userService->newUserValidator(
            $_POST["personData"]
        );
    }
}