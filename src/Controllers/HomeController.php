<?php

namespace Project\Controllers;

use Project\ViewRenderer;
use Project\DatabaseQueries;

class HomeController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/home.php');
    }

}