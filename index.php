<?php 
// ДЕНЬ / НОЧЬ
$daytime = (int) date('H');
 if ($daytime <= 17 and $daytime >= 8) { 
 	//echo "Наступает день. Город просыпается.";
 } else { 
 	//echo "Наступает ночь. Просыпается мафия.";
 }

// meta tags
$title = "INDEX";
$description = "DESCRIPTION";

require_once('header.php');
?> 



<body>
  <div class="wrapper">
    <img id="bg-img" class="main-bg" src="images/main-bg-day.jpg">
    <header>
      <button class="main-menu-btn hvr-pulse">Меню</button>
      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio" data-action="show-actions-menu">	
          <figure>
            <img class="hvr-pulse" src="images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person" data-action="show-actions-menu">
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
    


<?
require_once('footer.php');
?>