<!DOCTYPE HTML>
<html lang="en">
<html>
<?php
require_once '../backend/dbh.class.php';
?>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/login_style.css">
    <link rel="stylesheet" type="text/css" href="../style/FooterStyle.css">
    <link rel="stylesheet" type="text/css" href="../style/HeaderStyle.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

    <?php
    include('../re-Usable/loginHeader.php');
    ?>

    <div class="login-page">
        <div class="form">
            <form action="../backend/loginVerify.php" method="post">
                <h1>Kyqu</h1>
                <input type="text" name="username" id="username" placeholder="Username" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
                <br>
                <br>
                <input name="login-btn" class="submitButton" type="submit" onclick="validate()"></input>
                <p class="message"></p>

                <button><a href="Register.php">SIGN UP</button></a>
            </form>

        </div>
    </div>


    <?php
    include('../Re-Usable/footer.php');
    ?>

</body>

</html>