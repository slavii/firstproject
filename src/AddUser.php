<?php

namespace Project;

class AddUser
{
    public function __construct($personData = [])
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO users (usr_login, usr_password, usr_email) 
                                                    VALUES (:login, :password, :email)');

        $stmt->bindParam(':login', $personData["login"]);
        $stmt->bindParam(':password', $personData["password"]);
        $stmt->bindParam(':email', $personData["email"]);

        $stmt->execute();
    }
}