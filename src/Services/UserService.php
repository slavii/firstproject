<?php

namespace Project\Services;

use Project\AddUser;

class UserService
{

    public function newUserValidator($login, $password, $repassword, $firstname, $lastname, $email, $phone, $url)
    {
        if (!strlen($login) <= 5 && !preg_match('/^[a-zA-Z\d]+$/', $login)) {
            return 0;
        } else if (!strlen($password) >= 5) {
            return 0;
        } else if (!strlen($repassword) >= 5 or !(($_POST["repassword"]) == ($_POST["password"]))) {
            return 0;
        } else if (!strlen($firstname) >= 5 && !preg_match('/^[a-zA-Z]+$/', $firstname)) {
            return 0;
        } else if (!strlen($lastname) >= 5 && !preg_match('/^[a-zA-Z]+$/', $lastname)) {
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
    }

}
