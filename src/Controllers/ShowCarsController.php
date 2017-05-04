<?php
namespace Project\Controllers;

use Project\ViewRenderer;

class ShowCarsController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/show_cars.php');
    }
}