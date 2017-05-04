<?php

namespace Project;

class LoadImages
{
    public function __construct()
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('SELECT * FROM images;');

        $stmt->execute();
    }
}