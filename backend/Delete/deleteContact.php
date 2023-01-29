<?php

include_once '../Mapper/ContactMapper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new ContactMapper();
    $mapper->deleteForm($id);

    sleep(1);

    header('Location:../../HTMLfiles/contactForms.php');
}