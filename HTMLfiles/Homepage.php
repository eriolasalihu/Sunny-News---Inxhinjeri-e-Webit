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
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <script type="text/javascript" src="../js/slider.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Homepage</title>
</head>

<body>
        <?php
        include('../Re-Usable/header.php');
        ?>
        <main>
            <div class="background-section">
                <div class="display-row">
                    <div class="image-container">
                        <Image
                            src="https://telegrafi.com/wp-content/uploads/2025/01/Screenshot_16-18-780x439.png"
                            alt="Breaking news globe background"
                        />
                    </div>

          <div class="news-content">
            <h3>
              E FUNDIT: <span>Zelensky bën thirrje për unitet</span>
            </h3>
            <p>
            Presidenti ukrainas Volodymyr Zelensky ka bërë thirrje për “unitet” në veprim kundër Rusisë. 
            Ne po punojmë vazhdimisht me partnerët tanë për të forcuar aftësitë tona mbrojtëse dhe për të reduktuar aftësinë e Rusisë për të terrorizuar Ukrainën”, shkroi presidenti ukrainas.
              <span>Volodymyr Zelensky</span>.
            </p>
            <a href="#" class="action-btn">
              Lexo me shume
            </a>
          </div>
        </div>
      </div>

      <div class="news-section">
  <h2>NJIHUNI ME LAJMET E FUNDIT</h2>
  <h3>Lajmet rreth botës</h3>

  <div class="news-button">
    <a href="#" class="action-btn">
              Lexo me shume
            </a>
  </div>

  <div class="current-news-head">
    <div class="banner-sub-content">
      <div class="hot-topic">
        <div class="hot-topic-image">
          <img src="https://media.istockphoto.com/id/529664572/photo/fruit-background.jpg?s=612x612&w=0&k=20&c=K7V0rVCGj8tvluXDqxJgu0AdMKF8axP0A15P-8Ksh3I=" alt="Healthy lifestyle" />
        </div>
        <div class="hot-topic-content">
          <h2>Sa ndikojnë frutat në shëndetin tonë</h2>
          <h3>Shëndeti</h3>
          <p>Frutat janë të rëndësishme për një dietë të ekuilibruar. Luleshtrydhet Jolie kanë zënë vendin e parë si më të preferuarat.</p>
          <a href="HealthCategory.php">Lexo më shumë</a>
        </div>
      </div>

      <div class="hot-topic">
        <div class="hot-topic-image">
          <img src="https://esct2019.storage.googleapis.com/wp-content/uploads/2024/02/wsi-imageoptim-IMG_1097.jpeg?x88561" alt="Eurovision 2024" />
        </div>
        <div class="hot-topic-content">
          <h2>Kush do të përfaqësojë Shqipërinë në Eurovision</h2>
          <h3>Muzikë</h3>
          <p>Pas suksesit të Albina Kelmendit në Eurovision 2023, shumë presin të shohin kush do të përfaqësojë Shqipërinë këtë vit.</p>
          <a href="Readmore.php">Lexo më shumë</a>
        </div>
      </div>

      <div class="hot-topic">
        <div class="hot-topic-image">
          <img src="https://media.istockphoto.com/id/529664572/photo/fruit-background.jpg?s=612x612&w=0&k=20&c=K7V0rVCGj8tvluXDqxJgu0AdMKF8axP0A15P-8Ksh3I=" alt="Healthy lifestyle" />
        </div>
        <div class="hot-topic-content">
          <h2>Sa ndikojnë frutat në shëndetin tonë</h2>
          <h3>Shëndeti</h3>
          <p>Frutat janë të rëndësishme për një dietë të ekuilibruar. Luleshtrydhet Jolie kanë zënë vendin e parë si më të preferuarat.</p>
          <a href="HealthCategory.php">Lexo më shumë</a>
        </div>
      </div>
    </div>
  </div>

  <div class="only-text">
    <h2>Top news of the world</h2>
  </div>
</div>

      <div class="bottom-boxes">
        <div class="box-holder">
          <div class="number-circle">1</div>
          <div class="box-image">
            <Image
              src="https://assets.goal.com/images/v3/bltc38182c5f20878f4/GOAL_-_Blank_WEB_-_Facebook_-_2023-03-31T134149.308.png?auto=webp&format=pjpg&width=3840&quality=60"
              alt="Sports news"
            />
          </div>
          <div class="box-content">
            <h3>Sport</h3>
            <p>
              <a href="#">
                Lionel Messi është shpallur si lojtari më i mirë i Kampionatit
                Botëror të mbajtur në Katar...
              </a>
            </p>
          </div>
        </div>

        <div class="box-holder">
          <div class="number-circle">2</div>
          <div class="box-image">
            <Image
              src="https://media.npr.org/assets/img/2022/12/30/ap22364795346345-153c53713ce57b880428deae9fef9b9926961b6b.jpg"
              alt="Another sports news"
            />
          </div>
          <div class="box-content">
            <h3>Football</h3>
            <p>
              <a href="#">
                Cristiano Ronaldo arrin një tjetër rekord historik...
              </a>
            </p>
          </div>
        </div>
        <div class="box-holder">
          <div class="number-circle">3</div>
          <div class="box-image">
            <Image
              src="https://assets.goal.com/images/v3/bltc38182c5f20878f4/GOAL_-_Blank_WEB_-_Facebook_-_2023-03-31T134149.308.png?auto=webp&format=pjpg&width=3840&quality=60"
              alt="Sports news"
            />
          </div>
          <div class="box-content">
            <h3>Sport</h3>
            <p>
              <a href="#">
                Lionel Messi është shpallur si lojtari më i mirë i Kampionatit
                Botëror të mbajtur në Katar...
              </a>
            </p>
          </div>
        </div>
      </div>
      </div>

      <div class="slideshow-container" style="margin-top: 10%; width:50%">

<!-- Slide 1 -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdnimpuls.com/alfapress.al/media3/-640-0-unnamed-2-828.jpg" style="width:100%">
  <div class="text">Lajmet me te reja</div>
</div>

<!-- Slide 2 -->
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://graziamagazine.com/wp-content/uploads/2022/04/GettyImages-1389382981.jpg?resize=1024%2C693" style="width:100%">
  <div class="text">Hailey Bieber/ Justin Bieber</div>
</div>

<!-- Slide 3 -->
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2022/11/896/500/Selena-Gomez-Hailey-Bieber.jpg?ve=1&tl=1" style="width:100%">
  <div class="text">Selena Gomes & Hailey Bieber</div>
</div>

<!-- Navigation arrows -->
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<!-- Dots for navigation -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
</div>
        </main>

        <?php
        include('../Re-Usable/footer.php');
        ?>
    </body>

</html>