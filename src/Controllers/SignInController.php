<?php
namespace Project\Controllers;

use Project\Services\LogInService;
use Project\ViewRenderer;

class SignInController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/signin.php');

        if (isset($_POST["submit"])) {
            $logInService = new LogInService();
            $logInService->loginValidator(
                $_POST["login"],
                $_POST["password"]
            );
        }
    }
}