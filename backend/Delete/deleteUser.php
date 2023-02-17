<?php

include_once '../Mapper/userMapper.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($id);

    sleep(1);

    header('Location:../../HTMLfiles/AdminDashboard.php');
}