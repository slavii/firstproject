<?php

namespace Project;


class ShowUsers
{
    public function __construct()
    {
        $db = DBConnection::getInstance();

        $query = 'SELECT * FROM users;';

        $sth = $db->prepare($query);

        $sth->execute();
        $result = $sth->fetchAll();

        var_dump($result);
    }
}