<?php

include_once '../Mapper/userMapper.php';
include_once '../SuperClass/SimpleUser.php';

if (isset($_POST['submitBtn'])) {
    $user = new EditUser($_POST);
    $user->editData();
}

class EditUser
{
    private $userId;
    private $username;
    private $email;
    private $role;

    function __construct($formData)
    {
        $this->userId = $formData['id'];
        $this->email = $formData['email'];
        $this->username = $formData['username'];
        $this->role = $formData['role'];
    }

    public function editData()
    {
        $user = new SimpleUser($this->userId, $this->email, $this->username,$this->role);
        $mapper = new UserMapper();
        $mapper->editUser($user, $this->userId);
        sleep(4);
        header("Location:../../HTMLfiles/AdminDashboard.php");
    }
}
