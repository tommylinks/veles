  <?//path
$template_path = "/omega/";?>
<!DOCTYPE html>
<html lang="ru" manifest="<? echo $template_path; ?><? echo $manifest; ?>" > 


<head>
  <meta charset="UTF-8">
  <title><? echo $title; ?></title>
  <meta name="description" content=<? echo $description; ?> >
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Template Basic Images Start -->
  <!--<meta property="og:image" content="<?php echo $template_path; ?>path/to/image.jpg">
  <link rel="shortcut icon" href="<?php echo $template_path; ?>img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_path; ?>img/favicon/apple-touch-icon-72x72.png">-->
  <link rel="apple-touch-icon" sizes="16x16" href="<?php echo $template_path; ?>favicon/favicon-16x16.png">
  <!-- Template Basic Images End -->
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/tooltipster.bundle.min.css"> 
  <!-- CustomScrollbar -->
  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/jquery.mCustomScrollbar.css">

  <link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>css/style.css"> 
  
  <!-- Preloader -->
  <link rel="stylesheet" href="<?php echo $template_path; ?>css/preloader.min.css">

  <!-- JQuety + Pjax   -->
  <script src="<?php echo $template_path; ?>js/jquery.min.js"></script>
  <script src="<?php echo $template_path; ?>js/jquery.pjax.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- tooltipster -->
  <script src="<?php echo $template_path; ?>js/tooltipster.bundle.min.js"></script>


  <!-- CustomScrollbar -->
  <script src="<?php echo $template_path; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- For detection user-agent -->
  <script src="<?php echo $template_path; ?>js/detect.min.js"></script>

  <!-- Pathes -->
  <script src="<?php echo $template_path; ?>js/paths.js"></script>

  <!-- Custom functions -->
  <script src="<?php echo $template_path; ?>js/functions.js"></script>

  <!-- Speednetwork -->
  <script src="<?php echo $template_path; ?>js/speednetwork.js"></script>
      
  <!-- Preloader -->
  <script src="<?php echo $template_path; ?>js/preloader.js"></script>



 
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
      display: block;
      opacity: 0;
      z-index: 0;
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

    #snt-preloader {
		top: 0px;
		left: 0px;
		right: 0px;
		width: 0%;
		height: 3px;
		position: absolute;
		background-color: #ea6052;
		z-index: 999;
	}
     
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


/*windowview START*/

  #bg-img-anim {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      -o-object-fit: cover;
      -moz-object-fit: cover;
      -webkit-object-fit: cover;
      object-fit: cover;
      z-index: -1;
      -moz-user-select: none;
      -khtml-user-select: none;
      user-select: none;
  }

.floor-number {
      margin: 15px 0;
      text-align: center;
      color: #fff;
      font-size: 21px;
      text-transform: uppercase;
      text-shadow: 0 0 5.8px rgba(0, 0, 0, 0.7);
      -moz-user-select: none;
      -khtml-user-select: none;
      user-select: none;
  }

.toggle-controls {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 10%;
      z-index: 99;
      width: 100px;
}
  .toggle-controls-top, .toggle-controls-bottom {
    display: block;
    background: none;
    border: none;
    width: 84px;
    height: 58px;
    margin: 0 auto;
    outline: none;
  }

  .toggle-controls-top {
    background: url(/omega/images/icons/floor-up.png);
  }

  .toggle-controls-bottom {
    background: url(/omega/images/icons/floor-down.png);
  }

  .icon-phone.secondary-p {
    display: inline-block;
    position: absolute;
    bottom: 110px;
    right: 62px;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: .5s linear;
    z-index: 10;
  }

 .icon-phone.secondary-p .icon-phone-animation {
    width: 89px;
    height: 89px;
    background: url(/omega/images/icons/phone.png) no-repeat;
    -webkit-animation: 1.2s ease-in-out 0s normal none infinite running trambling-animation;
    -moz-animation: 1.2s ease-in-out 0s normal none infinite running trambling-animation;
    -o-animation: 1.2s ease-in-out 0s normal none infinite running trambling-animation;
    animation: 1.2s ease-in-out 0s normal none infinite running trambling-animation;
 }

 .close-windowview a{
    position: absolute;
    top: 77px;
    right: 70px;
    color: #fff;
    font-size: 21px;
    font-size: 66px;
    cursor: pointer;
    z-index: 2;
    text-shadow: 0 0 13px rgba(1, 1, 1, 0.7);
 }
  .close-windowview a:hover{
    text-decoration: none;
 }

.mouse-move {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: 0 auto;
}

/* windowview END*/
 </style>
 <style>
.floorgroup {
	opacity: 0;
}
.floorgroup.visible {
	opacity: 1;
}
</style>


<style type="text/css">
  
  .veles-widget {
    position: absolute;
    right: 20px;
    top: 30px;
    z-index: 1;
    color: #c7c7c7;
    padding: 10px 15px;
    text-align: center;
    background: rgba(0,0,0, 0.3);
    border-radius: 10px;
    
  }

  .veles-widget caption {
    padding: 5px 0;
    text-transform: uppercase;
    background: rgba(204, 204, 204, 0.34);
    margin-bottom: 10px;
  } 

  .veles-widget td {
    padding: 10px;
    min-width: 100px;
  }


  .veles-widget .border-b {
    border-bottom: 1px solid #c7c7c7;
  }

  .veles-widget .border-r {
    border-right: 1px solid #c7c7c7;
  }

</style>
</head>