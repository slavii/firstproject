<?php

namespace Project;

class AddUser
{
    public function __construct($login, $password, $firstname, $lastname, $email, $phone, $url)
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO users (usr_login, usr_password, usr_fname, usr_lname, usr_email, usr_phone, usr_url) 
                                                    VALUES (:login, :password, :firstname, :lastname, :email, :phone, :url)');

        $stmt->bindParam(':login', $sqlLogin);
        $stmt->bindParam(':password', $sqlPassword);
        $stmt->bindParam(':firstname', $sqlFirstName);
        $stmt->bindParam(':lastname', $sqlLastName);
        $stmt->bindParam(':email', $sqlEmal);
        $stmt->bindParam(':phone', $sqlPhone);
        $stmt->bindParam(':url', $sqlUrl);

        $sqlLogin = $login;
        $sqlPassword = $password;
//      $sqlPassword = password_hash($password, PASSWORD_BCRYPT);
        $sqlFirstName = $firstname;
        $sqlLastName = $lastname;
        $sqlEmal = $email;
        $sqlPhone = $phone;
        $sqlUrl = $url;
        $stmt->execute();
    }
}