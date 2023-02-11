<!DOCTYPE html>
<?php
session_start()
?>
<html>
<head>
    <title>
        Contact Us
    </title>
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <link rel="stylesheet" href="../style/ContactUs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include('../Re-Usable/header.php');
    ?>
    <div class="formDiv">
        <p>
            Contact us for support
        </p>
        <b>
            Fields marked with * are required
        </b>
        <form action="../backend/logic/contactLogic.php" method="post">
            <label>
                * Your name and last name:
            </label>
            <input required min="0" max="40" name="name">
            <br />
            <label>
                * Your email:
            </label>
            <input required min="0" max="40" type="email" name="email">
            <br />
            <label>
                Your phone number:
            </label>
            <input min="0" max="40" name="phoneNr">
            <br />
            <label>
                Category of support
            </label>
            <select name="category" id="cat">
                <option value="badInfo1"></option>
                <option value="badInfo">Disinformation</option>
                <option value="defamation">Defamation</option>
                <option value="crAbuse">Copyright Issues</option>
                <option value="itSupport">It Support</option>
            </select>
            <br />
            <label>
                * Your message:
            </label>
            <textarea required min="0" max="40" name="message" style="    border-radius: 20px;">
                </textarea>
            <input type="submit" class="btn" name="submitBtn">
        </form>
    </div>
    <?php
    include('../Re-Usable/footer.php');
    ?>

</html>