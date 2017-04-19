<?php
namespace Project\Controllers;

use Project\ViewRenderer;

class CarsAddController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/cars_add.php');
    }
}