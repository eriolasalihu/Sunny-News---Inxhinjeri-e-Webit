<!DOCTYPE html>
<html lang="en">
<?php
include_once '../backend/Mapper/articleMapper.php';
include_once '../backend/logic/articleLogic.php';

$mapper = new ArticleMapper();
$articles = $mapper->getArticleByID(1);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Readmore.css">
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <title>SunnyHill News</title>
</head>

<body>
    <div class="container">
        <?php
        include('../Re-Usable/header.php');
        ?>
        <!-- <header> -->
        <?php
        $article = $mapper->getArticleByID(1);
        foreach ($article as $articles) {

        ?>
            <main>
                <h1 class="heading-1"><?php echo $articles['headline']; ?><br></h1>
                <div class="sub-heading">
                    <p>E Enjte, <span><?php echo $articles['dateAdded']; ?></span></p>
                    <p class="importent">By <?php echo $articles['journalists']; ?></p>
                </div>
                <!-- </header> -->

                <div class="main">
                    <div class="home">
                        <div class="left">
                            <img src="../images/albina.jpg" class="home-img" alt="Albina ne Eurovision">
                        </div>
                        <div class="right">
                            <h3 class="heading-3">Lajmet e fundit</h3>
                            <div class="lists">
                                <div class="list">
                                    <img src="../images/cold-weather.jpg" alt="fotoja">
                                    <a href="#">
                                        <p>Stuhia dimërore që kaploi SHBA-në, humbin jetën 17 persona.</p>
                                    </a>
                                </div>

                                <div class="list">
                                    <img src="../images/sulmkibernetik.jpg" alt="fotoja">
                                    <a href="#">
                                        <p>Sulm kibernetik ndaj Bankës Credins në Shqipëri: Llogaritë dhe asetet janë të sigurta</p>
                                    </a>
                                </div>

                                <div class="list">
                                    <img src="../images/twitter.png" alt="fotoja">
                                    <a href="#">
                                        <p>Elon Musk: Postimet në Twitter lexohen 100 herë më shumë se sa që pëlqehen</p>
                                    </a>
                                </div>

                                <div class="list">
                                    <img src="../images/dialogu.jpg" alt="fotoja">
                                    <a href="#">
                                        <p>Barrikadat në veri bllokuan edhe dialogun Kosovë-Serbi.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article>
                      <?php echo $articles['content']; ?>
                    </article>
                </div>
    </div>
    <blockquote>
        <i>Gazeta SunnyHill News nuk eshte vetem per te raportuar te rejat ashtu sic jane, por edhe per t'i bere njerezit te ndermarrin dicka per ato qe po ndodhin.</i>
    </blockquote>

    <div class="cards">
        <div class="card">
            <h4 class="heading-4">Pas akuzave dhe acarimeve, presidenti i FIFA-s kalon në nivel personal me Salt Baen</h4>
            <p>Gianni Infantino duket se nuk e ndjek më “Salt Bae” në Instagram pasi FIFA nisi një hetim se si kuzhinieri i famshëm u lejua të hynte në fushë pas finales së Kupës së Botës.
                Salt Bae, emri i vërtetë Nusret Gokçe, është parë duke kontaktuar me lojtarët e Argjentinës dhe duke pozuar me trofeun e Kupës së Botës.</p>
        </div>

        <div class="card">
            <h4 class="heading-4">Zelensky flet për vizitën në SHBA: Ishte një udhëtim i rrallë, nuk kam kohë për më shumë të tilla</h4>
            <p>Presidenti ukrainas, Volodymyr Zelensky ka qenë prezent në Konferencën e Ambasadorëve të Ukrainës në Kiev.
                Duke u shfaqur në publik për herë të parë që prej rikthimit nga Shtetet e Bashkuara, përmes Polonisë, ai theksoi se vizita ishte e rrallë, raporton cnn. “Kjo vizitë është një pikë e rëndësishme".</p>
        </div>

        <div class="card">
            <h4 class="heading-4">Shkaku i motit të keq, deri më tani janë anuluar rreth 7000 fluturime në SHBA</h4>
            <p>Avio-kompanitë e ndryshme amerikane kanë anuluar rreth shtatë mijë fluturime deri më tani para Krishtlindjeve.
                Në Aeroportin Ndërkombëtar Buffalo Niagara në New York, të gjitha fluturimet e mbrëmjes janë anuluar të premten për shkak të kushteve të vështira. Amtrak gjithashtu anuloi shumë udhëtime me trena.</p>
        </div>
    </div>
    </main>
<?php
        }
?>

<?php
include('../Re-Usable/footer.php');
?>
</body>

</html>