<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/login_style.css">
    <link rel="stylesheet" type="text/css" href="../style/FooterStyle.css">
    <link rel="stylesheet" type="text/css" href="../style/HeaderStyle.css">
    <script src=".../js/login.js"></script>
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

<header>
    <div class="header">
        <img src="https://www.pngkey.com/png/full/208-2088636_news-amp-events-report-icon-black-png-newspaper.png" style="width: 72px;
        margin: 0px 12px; height: 45px;
        " />

        <div class="header-right">
            <a class="active" href="../-Inxhinieri e Webit-/HomeStyle.html">Home</a>
            <a href="../-Inxhinieri e Webit-/About us.html">About Us</a>
            <a href="../-Inxhinieri e Webit-/login.html">Log in</a>
            <a href="../-Inxhinieri e Webit-/Register.html">Register</a>
        </div>
    </div>
</header>

    <div class="login-page">
        <div class="form">
            <form>
                <h1>Kyqu</h1>
                <input type="text" name="username" id="username" placeholder="Username" required/>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <br>
                <br>
                <button type="button" value="Login" id="submit" onclick="validate()">LOGIN</button>
                <p class="message"></p>
            </form>

            <form class="login-form">
                <button><a href="../-Inxhinieri e Webit-/Register.html">SIGN UP</button></a>
            </form>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(33, 31, 32)" fill-opacity="1"
            d="M0,224L48,208C96,192,192,160,288,122.7C384,85,480,43,576,58.7C672,75,768,149,864,160C960,171,1056,117,1152,85.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <footer class="footer">
        <div class="l-footer">
            <h1>
                <img src="https://www.pngkey.com/png/full/208-2088636_news-amp-events-report-icon-black-png-newspaper.png" style="width: 72px;
                margin: 0px 12px; height: 45px;
                " />
            </h1>
            <p>
                Gazeta SunnyHill News nuk eshte vetem per te raportuar te rejat ashtu sic jane, por edhe per t'i bere
                njerezit te ndermarrin dicka per ato qe po ndodhin.</p>
        </div>
        <ul class="r-footer">
            <li>
                <h2>Social</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Reddit</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>
                    Information</h2>
                <ul class="box h-box">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Certifications</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </li>
            <li>
                <h2>
                    Legal</h2>
                <ul class="box">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Contract</a></li>
                </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p>All rights reserved by ©SunnyHillNews 2022 </p>
        </div>
    </footer>

</body>

</html>