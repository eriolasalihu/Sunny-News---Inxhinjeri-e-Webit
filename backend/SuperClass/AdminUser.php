<?php

include_once 'Person.php';

class AdminUser extends Person
{

    public function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, $role);
    }


    public function setSession()
    {
        $_SESSION['role'] = 1;
        $_SESSION['roleName'] = 'AdminUser';
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}