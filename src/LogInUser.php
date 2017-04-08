<?php

namespace Project;

use Project\Controllers\MyProfileController;

class LogInUser
{
    public function __construct($login, $password)
    {
        $db = DBConnection::getInstance();

        $query = "SELECT * FROM users WHERE usr_login = :login AND usr_password = :password;";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':login', $sqlLogin);
        $stmt->bindParam(':password', $sqlPassword);

        $sqlLogin = $login;
        $sqlPassword = $password;
//        $sqlPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt->execute();
        $result = $stmt->fetchAll();

        //echo $result[0]["usr_login"];

        //var_dump($result);

        if (isset($result[0]["usr_login"]) || $result[0]["usr_login"] != $login) {
            echo "Bad Luck!";
            //return 0;
        }

        session_start([
            'login' => $login
        ]);

        echo "Success!";
    }
}