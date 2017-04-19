<?php
namespace Project\Controllers;

use Project\ViewRenderer;

class CarsMainController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/cars_main.php');
    }
}