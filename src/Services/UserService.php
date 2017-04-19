<?php

namespace Project\Services;

use Project\DBConnection;
use Project\AddUser;

class UserService
{

    public function newUserValidator($login, $password, $repassword, $email = '')
    {
        if (strlen($login) < 3 || !preg_match('/^[a-zA-Z\d]+$/', $login)) {
            return 0;
        } else if (!strlen($password) >= 6) {
            return 0;
        } else if (!strlen($repassword) >= 6 || !($repassword == $password)) {
            return 0;
        }

        $db = DBConnection::getInstance();

        $query = "SELECT * FROM users WHERE usr_login = :login";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':login', $login);

        $stmt->execute();
        $result = $stmt->fetchAll();

        if (isset($result[0]["usr_login"])) {
            echo "No";
            return 0;
        }

        new AddUser(
            $login,
            $password,
            $email
        );

        echo "Yes";
    }

}
