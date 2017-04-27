<?php

namespace Project\Services;

use Project\DBConnection;
use Project\AddUser;

class UserService
{

    public function newUserValidator($personData = [])
    {
        if (!strlen($personData["login"]) >= 3) {
            return 0;
        }
        if (!preg_match('/^[a-zA-Z\d]+$/', $personData["login"])) {
            return 0;
        }
        if (!strlen($personData["password"]) >= 6) {
            return 0;
        }
        if (!strlen($personData["repassword"]) >= 6) {
            return 0;
        }
        if (!($personData["repassword"] == $personData["password"])) {
            return 0;
        }

        $db = DBConnection::getInstance();

        $query = "SELECT * FROM users WHERE usr_login = :login";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':login', $personData["login"]);

        $stmt->execute();
        $result = $stmt->fetchAll();

        if (isset($result[0]["usr_login"])) {
            echo "No";
            return 0;
        }

        new AddUser($personData);

        echo "Yes";
    }

}