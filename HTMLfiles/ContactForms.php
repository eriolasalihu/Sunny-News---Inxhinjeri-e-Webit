<?php
    include_once '../backend/Mapper/ContactMapper.php';
    include_once '../backend/logic/contactLogic.php';

    $mapper=new ContactMapper();
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
            Contact forms
        </title>
    </head>
    <body>
    <?php
        include('../re-Usable/adminNav.php');
      ?>

    <div class='infoBox'>
        <div>
            <h3>
                Contact forms sent:
            </h3>
            <div>
                <?php
                    $forms=$mapper->getAllForms();
                    foreach($forms as $form){
                ?>
                
                <b>
                    <?php echo $form['name']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['email']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['phoneNr']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['category']?>
                </b>
                    <br>
                <p>
                    <?php echo $form['message']?>
                </p>
                        
                <a href=<?php echo "../backend/Delete/deleteContact.php?id=".$form['id'];
                    ?>>Confirm</a>
                <?php
                } 
                ?>
            </div>
        </div>
    </div>

    </body>
</html>