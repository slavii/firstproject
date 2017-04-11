<?php

namespace Project\Services;

use Project\DBConnection;
use Project\AddUser;

class UserService
{

    public function newUserValidator($login, $password, $repassword, $firstname, $lastname, $email, $phone, $url)
    {
        if (!strlen($login) >= 3 && !preg_match('/^[a-zA-Z\d]+$/', $login)) {
            return 0;
        } else if (!strlen($password) >= 6) {
            return 0;
        } else if (!strlen($repassword) >= 6 or !($repassword == $password)) {
            return 0;
        }
//        else if (!strlen($firstname) >= 3 && !preg_match('/^[a-zA-Z]+$/', $firstname)) {
//            return 0;
//        } else if (!strlen($lastname) >= 3 && !preg_match('/^[a-zA-Z]+$/', $lastname)) {
//            return 0;
//        }

        $db = DBConnection::getInstance();

        $query = "SELECT * FROM users WHERE usr_login = :login";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':login', $login);

        $stmt->execute();
        $result = $stmt->fetchAll();

        //echo $result[0]["usr_login"];

        //var_dump($result);
        //echo $result[0]["usr_login"];

        if (isset($result[0]["usr_login"])) {
            echo "No";
            return 0;
        }

        new AddUser(
            $login,
            $password,
            $firstname,
            $lastname,
            $email,
            $phone,
            $url
        );

        echo "Yes";
    }

}
