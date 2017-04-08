<?php

namespace Project;

use PDO;

class DBConnection
{
    private static $instance = null;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=market', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}