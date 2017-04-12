<?php

namespace Project;

class AddUser
{
    public function __construct($login, $password, $email)
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO users (usr_login, usr_password, usr_email) 
                                                    VALUES (:login, :password, :email)');

        $stmt->bindParam(':login', $sqlLogin);
        $stmt->bindParam(':password', $sqlPassword);
        $stmt->bindParam(':email', $sqlEmail);

        $sqlLogin = $login;
        $sqlPassword = $password;
        $sqlEmail = $email;
        $stmt->execute();
    }
}