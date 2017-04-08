<?php
namespace Project\Controllers;

use Project\ViewRenderer;

class ContactUsController
{
    public function show()
    {
        $renderer = new ViewRenderer();
        echo $renderer->render('view/contactus.php');
    }
}