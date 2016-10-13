<?php 

 
// meta tags
$title = "INDEX";
$description = "DESCRIPTION";

require_once('../header.php');
?> 



<body>
  <div class="wrapper">
    <img id="bg-img" class="main-bg" src="<?php echo $template_path; ?>images/main-bg.jpg">
    <header>
      <button class="main-menu-btn hvr-pulse">Меню</button>
      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="<?php echo $template_path; ?>images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="<?php echo $template_path; ?>images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio">	
          <figure>
            <img class="hvr-pulse" src="<?php echo $template_path; ?>images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno">
          <figure>
            <img class="hvr-pulse" src="<?php echo $template_path; ?>images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person">
          <figure>
            <img class="hvr-pulse" src="<?php echo $template_path; ?>images/icons/person.png" alt="icon person energy" />
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
require_once('../footer.php');
?>