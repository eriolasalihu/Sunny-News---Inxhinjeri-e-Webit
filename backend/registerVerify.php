<?php

include_once '../backend/SuperClass/SimpleUser.php';
require_once '../backend/Mapper/userMapper.php';

session_start();

if (isset($_POST['registerBtn'])) {
    $register = new Registration($_POST);
    $register->insertData();
} else {
    header("Location:../HTMLfiles/Register.php");
}

class Registration
{
    private $username = "";
    private $email = "";
    private $password = "";

    function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username,  $this->email, $this->password, 0);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        sleep(4);
        header("Location:../HTMLfiles/Login.php");
    }
}
