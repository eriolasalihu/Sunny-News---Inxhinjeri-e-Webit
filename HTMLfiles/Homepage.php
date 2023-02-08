<!DOCTYPE html>
<html>
<?php
include_once '../backend/Mapper/articleMapper.php';
include_once '../backend/logic/articleLogic.php';

$mapper=new ArticleMapper();
$articles=$mapper->getAllArticles();
?>

<head>
    <link rel="stylesheet" href="../style/HomeStyle.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <link rel="stylesheet" href="../style/HomeStyle.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Homepage</title>
</head>

<body>

    <body>
        <?php
        include('../Re-Usable/header.php');
        ?>
        <main>
            <div class="social-icons">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <section class="banner">
                <div class="banner-main-content">
                    <h2 style="margin-top: 59px">NJOFTOHU ME LAJMET ME TE REJA</h2>
                    <h3>Lajmet rreth botes</h3>

                    <button>
                        <a href="#" style="text-decoration:none">Shiko me shume</a>
                    </button>

                    <div class="current-news-head">
                        <?php
                        $article = $mapper->showTop4MostRead();
                        foreach ($article as $articles) {
                        ?>
                            <h3>
                                <?php echo $articles['headline']; ?><br>
                            </h3>
                            <span>
                                <?php echo $articles['journalists']; ?><br>
                            </span>
                        <?php
                        }
                        ?>

                        <div class="banner-sub-content">
                            <div class="hot-topic">
                                <img src="https://images.unsplash.com/photo-1574856344991-aaa31b6f4ce3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80" alt="" style="width: 102%;">

                                <div class="hot-topic-content">
                                    <h2>Sa ndikojne frutat ne shendetin tone</h2>

                                    <h3>Frutat</h3>
                                    <p>E preferuara e stinëve të fundit është bërë një varietet luleshtrydhesh i edukuar në Itali -
                                        Jolie....</p>
                                    <a href="ReadMore1.php">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://pix.eurovisionworld.com/pix/albania-festivali-i-kenges-2023-albina-familja-kelmendi.jpg" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kush do te perfaqesoje Shqiperine ne Eurovision 2022? </h2>

                                    <h3>Eurovision 2022</h3>
                                    <p>Kush eshte Albina Kelmendi, qe rrembeu vendin e dyte dhe te pare ne Eurovision.</p>
                                    <a href="Readmore.php">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://yt3.googleusercontent.com/ytc/AMLnZu9X0I_rv6PlC0FPlF3893vaH-QPFiERqfBGQu68uA=s900-c-k-c0x00ffffff-no-rj" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kur do te filloje BBV2 ne Shqiperi</h2>
                                    <h3>Big Brother VIP</h3>
                                    <p>Cili do te jete i ftuari i pare ne BBV2, kush do te udheheqe kete edicion te BBV2? Sa do te
                                        jete shuma per fituesin?</p>
                                    <a href="#">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://img.olympicchannel.com/images/image/private/f_auto/t_s_pog_staticContent_hero_lg_2x/primary/yk2f8tqpjxzdnw3e5b1n" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kush do te fitoje WorldCup 2022?</h2>

                                    <h3>World Cup 2022</h3>
                                    <p>Argjentine vs France, cila do te jete fituese kete vite? Kush do te rrembeje kupen e botes?
                                    </p>
                                    <a href="#">Lexo</a>
                                </div>
                            </div>
                        </div>
            </section>
            <div class="BottomBoxes">
                <div class="BoxHoldr1">
                    <img src="https://wallpaperforu.com/wp-content/uploads/2021/08/Messi-Paris-Saint-Germain-Wallpapers19.jpg" style="width: 100%;" />
                    <h3>
                        Sport
                    </h3>
                    <div>
                        <a href="#">
                            Lionel Messi është shpallur si lojtari më i mirë i Kampionatit Botëror të mbajtur në Katar.
                        </a>
                    </div>
                </div>

                <div class="BoxHoldr1">
                    <img src="https://cdn.hswstatic.com/gif/csi-lead.jpg" style="width: 95%;" />
                    <h3>
                        Kronika e zeze
                    </h3>
                    <div>
                        <a href="#">
                            Pas vitesh gjahtarësh të egër të pamëshirshëm, i shpëtuan të dënuarit Riddick papritmas e gjen
                            veten të kapur midis
                            forcave kundërshtare në një luftë për të ardhmen e racës njerëzore
                        </a>
                    </div>
                </div>

                <div class="BoxHoldr1">
                    <img src="https://img.freepik.com/free-vector/medical-science-healthcare-blue-banner_1017-23667.jpg?w=2000" style="width: 100%;" />
                    <h3>Shendetesi</h3>

                    <div>
                        <a href="#">
                            Në të kaluarën, mundësitë e Kosovës për të zhvilluar një sistem modern të kujdesit shëndetësor
                            ishin të kufizuara
                        </a>
                    </div>
                </div>

            </div>
        </main>

        <?php
        include('../Re-Usable/footer.php');
        ?>
    </body>

</html>