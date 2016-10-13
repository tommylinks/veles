<?php 
// ДЕНЬ / НОЧЬ
$daytime = (int) date('H');
 if ($daytime <= 17 and $daytime >= 8) { 
 	//echo "Наступает день. Город просыпается.";
 } else { 
 	//echo "Наступает ночь. Просыпается мафия.";
 }
?> 

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Template Basic Images Start -->
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
  <!-- Template Basic Images End -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <header>
      <button class="main-menu-btn hvr-pulse">Меню</button>
      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio">	
          <figure>
            <img class="hvr-pulse" src="images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno">
          <figure>
            <img class="hvr-pulse" src="images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person">
          <figure>
            <img class="hvr-pulse" src="images/icons/person.png" alt="icon person energy" />
            <figcaption>Энергия личности</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-day-night">
        </div>
        <div class="main-icon icon-phone">
        </div>
      </div><!--END main-icons-kit -->
    </header>
    <footer class="footer-bg">
      <div class="footer-info">
        <h2>#FOOTER</h2>
      </div>
    </footer>

    <!-- overlay -->
    <div class="overlay"></div>

    <!-- main menu -->
    <div class="main-menu">
      <ul>
        <li><a href="">item1</a></li>
        <li><a href="">item2</a></li>
        <li><a href="">item3</a></li>
        <li><a href="">item4</a></li>
        <li><a href="">item5</a></li>
      </ul>
      <span class="close-main-menu">  &times;</span>
    </div>
  </div><!--END wrapper -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.pjax.js"></script>
  <!-- show main-menu -->
  <script>
    $(".main-menu-btn").click( function () {
      $(".footer-bg").css('background','transparent');
      $(".main-menu, .overlay").fadeIn(500);
      $(".main-menu").animate({
        opacity: 1,
        left: "0",
      }, 500, function() {
        // Animation complete.
      });
    });

    $(".close-main-menu, .overlay").click( function () {
      $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500, function() {
        // Animation complete.
      });
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
    });
  </script>
</body>
</html>
