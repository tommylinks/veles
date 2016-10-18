  <!-- DENIS_NEW -->
<?php 
//path
$template_path = "/beta/";

// day / night
//$daytime = (int) date('H');
$daytime = 18;
 if ($daytime >= 8 and $daytime <= 17) { 
    $daynight = "images/day/01.jpg";
    $daynight_style = "opacity: 1";
    $daynight_back = "images/night/01.jpg";
    $night_icon = "images/icons/night.png";
 } else { 
    $daynight = "images/day/01.jpg";
    $daynight_style = "opacity: 0";
    $daynight_back = "images/night/01.jpg";
    $day_icon = "images/icons/day.png";
 }
?>
  <!-- //DENIS_NEW -->
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title><? echo $title; ?></title>
  <meta name="description" content=<? echo $description; ?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Template Basic Images Start -->
  <meta property="og:image" content="<?php echo $template_path; ?>path/to/image.jpg">
  <link rel="shortcut icon" href="<?php echo $template_path; ?>img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon-114x114.png">
  <!-- Template Basic Images End -->
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/floating-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/ionicons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/style.css">
  <!-- JQuety + Pjax   -->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $template_path; ?>js/jquery.pjax.js"></script>
</head>