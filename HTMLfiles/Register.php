<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrimi</title>

    <link rel="stylesheet" href="../style/Register.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <!-- <script defer src="./Register.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>

<body>
    <?php
        include('../re-Usable/loginHeader.php');
    ?>

    <main>
        <div class="container">
            <form id="form" action="../backend/registerVerify.php" method="post">
                <h1>Regjistrohu</h1>
                <div class="input-control">
                    <input type="text" name="username" id="username" placeholder="Username" />
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input type="text" name="email" id="email" placeholder="Email" />
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="password" name="password" type="password" placeholder="Password">
                    <div class="error"></div>
                </div>
                <button name="registerBtn" id="submitBtn"  id="submitBtn" type="submit">REGJISTROHUNI</button>
            </form>
        </div>

        <?php
        include('../Re-Usable/footer.php');
        ?>
</body>

</html>