<?php

namespace Project;

use PDO;

class DatabaseQueries
{
    public function getAllUsers()
    {
        $db = DBConnection::getInstance();

        $test = $db->query('select * from users');

        $result = $test->fetchAll();

        return $result;
    }

    public function newUser($arr)
    {
        $db = DBConnection::getInstance();

        $query = 'insert into users (usr_fname, usr_lname) values ("' . $arr["firstname"] . '", "' . $arr["lastname"] . '");';

        $db->query($query);
    }
}