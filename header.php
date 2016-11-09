  <?//path
$template_path = "/omega/";?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title><? echo $title; ?></title>
  <meta name="description" content=<? echo $description; ?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Template Basic Images Start -->
  <!--<meta property="og:image" content="<?php echo $template_path; ?>path/to/image.jpg">
  <link rel="shortcut icon" href="<?php echo $template_path; ?>img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon-114x114.png">-->
  <!-- Template Basic Images End -->
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/floating-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/ionicons.css"> 
  <!-- CustomScrollbar -->
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/jquery.mCustomScrollbar.css">

  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/style.css"> 

  <!-- JQuety + Pjax   -->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $template_path; ?>js/jquery.pjax.js"></script>

  <!-- floating-menu tooltips-->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/floating-menu.js"></script>

  <script type="text/javascript" src="<?php echo $template_path; ?>js/howler.js"></script>

  <!-- CustomScrollbar -->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- For detection user-agent -->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/detect.min.js"></script>
 
  <style> 
    #bgimg-back {z-index: -2;}

    body {
      overflow: hidden;
      padding: 0;
      margin: 0;
      min-height: 100vh;
    }
    .img-bg {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      -o-object-fit: cover;
      -moz-object-fit: cover;
      -webkit-object-fit: cover;
      object-fit: cover;
    }

    #bgvid-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: none;
      opacity: 0;
      z-index: 101;
    }
    
    video {
      height: 100%;
      width: 100%;
      -o-object-fit: cover;
      -moz-object-fit: cover;
      -webkit-object-fit: cover;
      object-fit: cover;
    }


    /*preloader*/

    #p_prldr{
      position: fixed;
      left: 0;
      top: 0;
      right:0;
      bottom:0;
      background: rgb(55,55,55);
      z-index: 102;}
     
    .contpre small{font-size:25px;}
     
    .contpre{
      height: 88px;
      position: absolute;
      left: 50%;top: 48%;
      margin-left:-60px;
      color:#fff;
      font-size:40px;
      letter-spacing:-2px;
      text-align:center;
      line-height:35px;}
     
    #p_prldr .svg_anm {
      position: absolute;
      width: 125px;
      height: 88px;
      background: url(/omega/images/icons/three-dots.svg) center center no-repeat;
      background-size:115px;
    }
  </style>
</head>