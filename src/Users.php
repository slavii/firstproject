<?php

namespace Project;

class Users
{
    public function addUser($arr)
    {
        $db = DBConnection::getInstance();

        $query = 'insert into users (usr_fname, usr_lname) values ("' . $arr["firstname"] . '", "' . $arr["lastname"] . '");';

        $db->query($query);
    }

}