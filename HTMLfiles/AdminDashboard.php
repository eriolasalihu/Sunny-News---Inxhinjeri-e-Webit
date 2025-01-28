<?php

include_once '../backend/Mapper/userMapper.php';

//  if (isset($_SESSION["role"]) && $_SESSION['role']=='1') {
$mapper = new UserMapper();

$userList = $mapper->getAllUsers();
$nrUsers = $mapper->getNrUsers();
// }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/journalistStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <script src="../js/sidebar.js"></script>
    <title>
        Admin Nav
    </title>
</head>
<body>
    <!-- navbari -->
<div class="header">
    <div class="logo">
        <b>Dashboard</b>
    </div>

    <div class="logout">
        <a href="../backend/logout.php">Logout</a>
    </div>
</div>
 
    <?php
    include('../re-Usable/adminNav.php');
    ?> 
<div class="container">
    <!-- User Info Section -->
    <div class="infoBox">
        <div class="usersList">
            <h3>All users:</h3>
            <?php
        $users = $mapper->getAllUsers();
        foreach ($users as $user) { 
        ?>
                <div class="userItem">
                    <b><?php echo $user['username']; ?></b>
                    <br />
                    <span><?php echo $user['email']; ?></span>
                    <br />
                    <a href=<?php echo "../backend/Delete/deleteUser.php?id=" . $user['userId'];
                ?> class="deleteButton">Delete</a>
        <br />
                </div>
            <?php
            }
            ?>
        </div>
        <div class="userCount">
            <h3>Number of users:</h3>
            <?php
    $nrUsers = $mapper->getNrUsers();
    foreach ($nrUsers as $nr) {
    ?>
        <h2>
            <?php echo $nr['nrUsers'] ?>
        </h2>
    <?php
    }
    ?>
            
        </div>
    </div>

    <!-- Edit User Form Section -->
    <div class="formBox">
        <h3>Edit User by ID</h3>
        <?php
$mapper = new UserMapper();
$users = $mapper->getUserByID(11);
foreach ($user as $users) {
?>
<form action="../backend/Edit/editUser.php" method="post" onsubmit="return validate()">
            <p><b>Fields marked with * are required</b></p>
            <label for="id">ID *</label>
            <input type="text" id="id" name="id" value="<?php echo $user['userId']; ?>" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>">

            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="badInfo1"></option>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>

            <button type="submit" id="submitBtn">Submit</button>
        </form>
        <?php
        }
        ?>
    </div>

</div>


</body>

</html>