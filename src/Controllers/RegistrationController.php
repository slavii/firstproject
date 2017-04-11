<?php

namespace Project\Controllers;

use Project\ViewRenderer;

class RegistrationController
{

    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/registration.php');
    }
}