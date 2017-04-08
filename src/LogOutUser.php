<?php

namespace Project;

class LogOutUser
{
    public function __construct()
    {
        session_destroy();
    }
}