<?php
include_once '../backend/Mapper/articleMapper.php';
include_once '../backend/Logic/articleLogic.php';

$mapper = new ArticleMapper();
$articles = $mapper->getAllArticles();

// if (isset($_GET['id'])) {
//     $id=$_GET['id'];

//     $mapper=new ArticleMapper();
//     $articles=$mapper->getArticleByID($id);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="../js/jsValidate.js"></script>
    <script src="../js/sidebar.js"></script>
    <title>
        News Editor
    </title>
</head>

<body>
    <?php
    include('../Re-Usable/adminNav.php');
    ?>
    <div class="formBox">
        <h3>
            Add news Article
        </h3>
        <form action="../backend/Logic/articleLogic.php" method="post" onsubmit="return validate()">

            <b>
                Fields marked with * are required
            </b>
            <label>
                Headline *
            </label>
            <input type="text" placeholder="Headline" name="headline" id="headline">
            <label>
                Content *
            </label>
            <textarea name="content" id="content" style="margin-bottom: 10px; border-radius: 10px;"></textarea>
            <label>
                Journalist name(s)
            </label>
            <input type="text" placeholder="Journalist(s)" name="journalists" id="journos">

            <label>
                Category of support
            </label>
            <select name="category" id="cat" style="height: 35px;
                                                    border-radius: 10px;
                                                    border-color: #cec0c0;
                                                    margin-bottom: 12px;">
                <option value="badInfo1"></option>
                <option value="sport">Sport</option>
                <option value="politics">Politics</option>
                <option value="culture">Culture</option>
                <option value="economy">Economy</option>
                <option value="health">Health</option>
                <option value="tech">Technology</option>
            </select>

            <label>
                Date Added
            </label>
            <input type="date" placeholder="Date Added" name="dateAdded" id="dateAdded">

            <label>
                Times Read
            </label>
            <input type="number" placeholder="Times Read" name="timesRead" id="journos">

            <button name="submitBtn" id="submitBtn">
                Submit
            </button>
            <br />
        </form>
    </div>


    <div class="formBox">
        <h3>
            Edit Article by Id
        </h3>
        <?php
        $article = $mapper->getArticleByID('1');
        foreach ($article as $articles) {
        ?>
            <form action="../backend/Edit/editArticle.php" method="post" onsubmit="return validate()">
                <b>
                    Fields marked with * are required
                </b>
                <label>
                    ID *
                </label>
                <input type="text" placeholder="Headline" name="id" value=<?php echo $articles['id']; ?>>
                <label>
                    Headline *
                </label>
                <input type="text" placeholder="Headline" name="headline" value=<?php echo $articles['headline']; ?>>
                <label>
                    Content *
                </label>
                <input type="text" required name="content" value=<?php echo $articles['content']; ?>></input>
                <label>
                    Journalist name(s)
                </label>
                <input type="text" placeholder="Journalist(s)" name="journalists" value=<?php echo $articles['journalists']; ?>>

                <label>
                    Date Added
                </label>
                <input type="date" placeholder="Date Added" name="dateAdded" id="dateAdded">

                <!-- For testing purposes only -->

                <label>
                    Times Read
                </label>
                <input type="number" placeholder="Times Read" name="timesRead" id="journos">

                <button name="submitBtn" id="submitBtn">
                    Submit
                </button>
                <br />
            </form>
        <?php
        }
        ?>
    </div>

    <div class="newsDiv">
        <h3>
            Active articles:
        </h3>
        <div>
            <?php
            $article = $mapper->getAllArticles();
            foreach ($article as $articles) {
            ?>
                <b>
                    <h2><?php echo $articles['headline']; ?><br></h2>
                    
                </b>
                <p>
                    <?php echo $articles['content']; ?><br>
                </p>
                <p>
                    <h4>Journalist Name: <?php echo $articles['journalists']; ?><br></h4>
                </p>
                <p>
                    <?php echo $articles['timesRead']; ?><br>
                </p>
                <p>
                    <?php echo $articles['dateAdded']; ?><br>
                </p>
                <br />
                <a href=<?php echo "../backend/Delete/deleteArticle.php?id=" . $articles['id'];
                        ?> class="deleteButton">Delete</a>
                <br />
                        <br>
                        <hr>
            <?php
            }
            ?>
        </div>

        <div>
            <?php
            $article = $mapper->showTop4MostRead();
            foreach ($article as $articles) {
            ?>
                <b>
                    <?php echo $articles['headline']; ?><br>
                </b>
                <p>
                    <?php echo $articles['content']; ?><br>
                </p>
                <p>
                    <?php echo $articles['journalists']; ?><br>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>