<!DOCTYPE html>
<html>
<?php
include_once '../backend/Mapper/articleMapper.php';
include_once '../backend/logic/articleLogic.php';

$mapper = new ArticleMapper();
?>

<head>
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <link rel="stylesheet" href="../style/ReadMore1.css">
    <title>Read More</title>
</head>

<body>
    <?php
    include('../Re-Usable/header.php');
    ?>
    <div class="container">
        <img src="https://images.pexels.com/photos/775031/pexels-photo-775031.jpeg?cs=srgb&dl=pexels-element-digital-775031.jpg&fm=jpg" style="width: 100%;" />

        <div class="centered">Health & Care</div>
    </div>

    <body>
        <div class="card-container">
            <?php
            $articleCategory = "health";
            $article = $mapper->getArticlesByCategory($articleCategory);
            foreach ($article as $articles) {
            ?>
                <div class="card">
                    <div class="card-image">
                    </div>
                    <div class="card-title"><?php echo $articles['headline']; ?></div>
                    <div class="card-text">
                        <?php echo $articles['content']; ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

        <img src="https://i.makeagif.com/media/7-20-2015/g1zROQ.gif" class="gif" />



        <?php
        include('../Re-Usable/footer.php');
        ?>
    </body>