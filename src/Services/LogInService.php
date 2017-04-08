<?php

namespace Project\Services;

use Project\LogInUser;

class LogInService
{

    public function loginValidator($login, $password)
    {

        if (!strlen($login) >= 5 && !preg_match('/^[a-zA-Z\d]+$/', $login)) {
            return 0;
        } else if (!strlen($password) >= 5) {
            return 0;
        }

        new LogInUser(
            $login,
            $password
        );
    }

}
