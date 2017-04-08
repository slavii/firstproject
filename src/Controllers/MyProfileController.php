<?php

namespace Project\Controllers;

use Project\LogOutUser;
use Project\ViewRenderer;
use Project\Services\UserService;

class MyProfileController
{

    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/myprofile.php');

        if (isset($_POST["logout"])) {
            new LogOutUser();
        }
    }
}