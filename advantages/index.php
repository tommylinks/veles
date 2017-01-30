<?php 

// meta tags
$title = "Advantages"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('../header.php');
?> 

<body>
<div class="wrapper">
<!-- preloader  -->
<script>
	preloader(true, 'white', 'red');	
</script><!--END preloader  -->

  <div id = "pjax-global" style = "opacity: 0;"> 
    <img id="bgimg" class="img-bg" src="" style = "">
    <img id="bgimg-back" class="img-bg" src="" style = "opacity: 1;">

    <div id="bgvid-wrapper" style ="position: absolute; ">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>


    <style>
      #myCanvasContainer{
      	position: absolute;
      	width: 100%;
      	height: 100%;
      }

      #myCanvas {
      display: block;
	    position: absolute;
      margin: 0 auto;
	    left: 0;
	    right: 0;
	    top: 50%;
	    transform: translateY(-50%);
      }
      
      .features {
        position: absolute;
        text-align: center;
        color:#fff;
        padding: 10px;
        z-index: 2;
        width: 139px;
        padding: 0px;
        overflow: visible;
        white-space: nowrap;
      }

      .features path {fill:#fff;}

      .features figcaption {
      	font-size: 18px;
        padding-top: 5px;
      	text-transform: uppercase;
      }
      
      .features.two figcaption{
        margin-left: -8px;
      }
      .features.three figcaption{
        margin-left: -2px;
      }
      .features.four figcaption{
        margin-left: -23px;
      }

      .features.one{
        top: 84px;
        left: 120px;
      }
      
      .features.two{
        top: 84px;
        right: 121px;
      }
      
      .features.three{
        bottom: 121px;
        left: 120px;
      }
      
      .features.four{
        bottom: 121px;
        right: 121px;
      }


    #tags ul li img{
      display: inline-block;
      border: 3px solid #000;
      border-radius: 50%;
    }

    .tooltip-title{
      display: block;
      font-size: 18px;
      text-align: center;
      margin: 20px 0;
    }

    .tooltip-title:after {
      display: block;
      content: "";
      width: 105px;
      border-bottom: 2px solid #fff;
      margin: 20px auto;
    }
      

    .tooltip-desc {
      font-size: 11px;
      line-height: 16px;
    }
    </style>


    <header>

      
    <!-- START documents-popup -->
	<div id="myCanvasContainer">

	<div class="features-wrap">

     <!-- tooltip for bio -->
    <div class="tooltip_templates">
      <span id="tooltip_content_bio">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </span>
    </div>

		<div class="features one bio tooltip" data-tooltip-content="#tooltip_content_bio">
		<figure>
      <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="139px" height="139px" version="1.1" style="shape-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 493 493" xmlns:xlink="http://www.w3.org/1999/xlink">
   			<path class="fil0" d="M232 0l4 0c4,0 7,0 11,0 98,0 184,58 223,142 13,26 21,55 23,86l0 9c0,3 0,7 0,10 0,3 0,6 0,9l0 3c0,2 0,4 0,6 -9,128 -116,228 -246,228 -137,0 -247,-110 -247,-246 0,-106 66,-196 160,-231 23,-10 48,-15 72,-16zm-171 192c21,-1 70,-13 110,20 26,22 24,49 24,83l-34 -40c-13,-11 -34,-23 -51,-24 9,11 20,10 44,31 10,9 27,29 31,43 -34,8 -74,-1 -97,-27 -16,-18 -27,-53 -27,-86zm287 0c-45,10 -86,34 -115,66l-27 37c0,-25 -17,-86 41,-130 63,-47 172,-36 172,-23 0,17 -8,50 -12,66 -5,16 -17,40 -26,53 -28,42 -87,61 -137,56 -20,-2 -36,7 -5,-36 6,-8 10,-14 17,-21 19,-19 42,-39 66,-52 12,-6 18,-6 26,-16z"/>
		</svg>
            <figcaption>Био энергия</figcaption>
          </figure>
		</div>

    <!-- tooltip for socio -->
    <div class="tooltip_templates">
      <span id="tooltip_content_socio">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </span>
    </div>

		<div class="features two socio tooltip" data-tooltip-content="#tooltip_content_socio">
			<figure>
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="139px" height="139px" version="1.1" style="shape-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1390 1390" xmlns:xlink="http://www.w3.org/1999/xlink">
   			   <path fill="black" d="M298 941c-40,0 -25,-29 -18,-85l12 -74c2,-6 9,-15 16,-15l181 0c12,0 17,17 18,28l12 81c7,35 16,65 -17,65 -22,0 -22,-31 -25,-58 -2,-14 -4,-21 -6,-37 -4,-23 1,-30 -14,-31 0,17 2,289 -1,299 -8,28 -52,23 -52,-7l0 -146 -10 0 0 144c0,31 -39,34 -50,17 -6,-10 -3,-85 -3,-105l0 -195c0,-7 -3,-7 -11,-7 0,8 -3,25 -5,33 -3,15 -8,74 -15,85 -2,3 -8,8 -12,8zm131 -555c132,-31 77,28 110,-110 3,-11 8,-20 -29,10 -19,15 -79,72 -81,100zm542 0c-1,-10 -14,-29 -20,-38 -25,-33 -53,-63 -91,-83l16 100c3,10 6,8 18,10 9,1 21,2 28,3 17,2 34,4 49,8zm-86 101l0 25c143,0 126,9 120,-29 -2,-16 -3,-20 -7,-33 -11,-39 -3,-25 -48,-35l-54 -8c-25,-3 -11,-1 -11,80zm-486 25l116 0c0,-94 15,-108 -9,-105l-90 14c-12,4 -19,47 -21,60 -1,10 -9,31 4,31zm153 -111c0,24 -5,38 -5,63l0 48 137 0 0 -116 -43 0c-33,0 -56,5 -89,5zm164 111l137 0 0 -48c0,-25 -5,-39 -5,-63 -32,0 -54,-5 -86,-5l-46 0 0 116zm-158 -144c37,0 78,-5 126,-5l0 -136c0,-11 -9,-7 -25,-5 -17,2 -73,12 -80,27 -1,4 -2,9 -3,14 -7,31 -18,74 -18,105zm158 -141l0 136c48,0 89,5 127,5 0,-20 -6,-43 -9,-61 -3,-12 -4,-20 -6,-30 -2,-7 -5,-22 -7,-28 -7,-16 -80,-29 -95,-29 -7,0 -10,0 -10,7zm674 433l0 52c-1,41 -5,81 -11,117 -5,29 -19,74 -28,101l-6 15c-1,0 -1,1 -1,1l-17 40c-16,36 -14,28 -29,57l-14 24c-4,7 -12,19 -17,26 -7,8 -12,15 -19,24 -3,4 -6,11 -9,14l-44 49c-7,11 -19,15 -27,26 -8,11 -23,20 -34,31 -4,3 -2,2 -6,5 -19,12 -37,27 -56,39 -33,19 -64,38 -99,52 -7,3 -9,4 -15,6 -15,8 -77,28 -96,33 -41,11 -87,17 -135,18l-43 0c-42,-1 -85,-5 -123,-12 -13,-2 -27,-4 -39,-8l-86 -28c0,0 -1,-1 -1,-1l-35 -16c-21,-8 -36,-19 -56,-29l-52 -34c-9,-6 -16,-12 -25,-18 -10,-5 -15,-13 -23,-19 -14,-11 -22,-21 -36,-31 -9,-6 -11,-13 -18,-22 -4,-4 -7,-6 -11,-9l-88 -121c-2,-6 -5,-10 -8,-15 -3,-7 -4,-7 -8,-12 -5,-9 -8,-20 -13,-30l-17 -42c-10,-26 -15,-53 -24,-73 -19,-47 -21,-138 -21,-191 0,-47 5,-91 15,-137l6 -22c0,0 1,-1 1,-1 0,-1 0,-1 0,-2 1,-2 2,-6 3,-8l22 -69c0,-1 0,-1 0,-2 1,0 1,-1 1,-1 0,-1 1,-2 1,-2l14 -31c16,-36 14,-28 29,-57 3,-6 1,-3 4,-9l10 -15c4,-7 12,-19 17,-26 7,-8 12,-15 19,-24 8,-12 29,-40 39,-47 4,-3 7,-6 10,-10l20 -22c8,-5 6,-3 11,-10l71 -58c33,-25 71,-46 109,-62l60 -26c19,-6 40,-9 58,-17 37,-15 118,-21 159,-21 46,0 144,4 187,19 1,1 1,1 2,1l5 2c2,1 6,2 8,3 46,12 68,22 109,40 21,8 36,19 56,29 17,8 80,51 90,62 11,12 22,16 33,30 6,8 10,7 17,13l5 5c4,5 1,1 5,7l15 16c13,10 9,13 19,23 15,14 26,33 38,49l47 76c9,14 19,44 26,60 2,4 1,0 2,5 0,0 0,1 1,1l2 7c9,22 14,43 20,65l6 15c11,40 17,85 18,132zm-472 112c5,-3 8,-5 15,-5l159 0c17,0 18,27 19,32 3,24 21,118 17,130 -4,13 -18,18 -32,10 -12,-6 -9,-21 -12,-37l-11 -65c-2,-9 -3,-15 -3,-22l-10 0 19 119c2,12 6,31 6,42 -7,5 -8,4 -15,8l-1 128c-6,28 -44,26 -51,2 -3,-8 -1,-96 -1,-115 0,-14 2,-15 -8,-18 -7,6 -5,5 -5,18l0 113c-6,25 -42,28 -51,4 -5,-11 -2,-116 -2,-132 -5,-3 -9,-4 -15,-5 0,-23 19,-119 23,-152 1,-10 4,-11 -8,-12l-8 59c-2,12 0,12 -7,17 0,-24 -14,-91 -18,-119zm-212 2c3,-3 4,-7 10,-7l180 0c22,0 20,54 25,73 3,12 2,28 6,42 3,10 10,40 3,50l-5 6c0,0 -1,0 -2,1 -6,3 -13,4 -20,0 -13,-7 -12,-22 -14,-37l-14 -87 -10 0 0 282c0,35 -15,33 -35,33 -24,0 -18,-59 -18,-81l1 -76c-1,-12 1,-13 -11,-14l0 143c-3,37 -46,36 -53,11l0 -177c0,-14 -1,-19 -1,-28 0,-6 0,-7 0,-13 0,-24 2,-30 0,-66 0,-5 -1,-6 -1,-14l-10 0 -9 67c-1,0 -1,3 -2,3 -2,7 0,3 -2,6 0,-17 -5,-35 -8,-61 -1,-10 -1,-5 -3,-14l-7 -42zm-181 -7l159 0c23,0 25,85 32,119 3,11 8,35 3,45 -5,11 -21,16 -32,7 -13,-10 -17,-70 -20,-84 -6,-37 2,-38 -14,-39 0,17 4,25 6,40l12 79c12,58 3,44 -10,50l-1 128c-2,12 -14,21 -24,21 -33,0 -28,-33 -28,-66l0 -71c0,-13 2,-14 -10,-15 0,18 2,120 -2,132 -8,18 -23,24 -41,15 -6,-3 -8,-6 -10,-13 -5,-13 -3,-113 -3,-131 -7,-4 -8,-3 -15,-8 3,-27 25,-144 25,-161 -15,1 -10,9 -14,33l-8 43c-7,-28 -11,-76 -16,-103 -3,-13 -8,-21 11,-21zm429 -66c0,-15 6,-33 17,-43 10,-8 9,1 10,-12 30,0 47,-17 76,22 38,50 -34,121 -85,73 -9,-8 -18,-24 -18,-40zm-147 56c-52,0 -69,-56 -52,-88 0,0 1,-2 2,-3l22 -21c12,-5 34,-5 47,0 60,21 44,112 -19,112zm-202 0c-36,0 -60,-25 -60,-61 0,-17 13,-41 34,-49 26,-10 23,-6 44,-1 9,2 8,1 21,12 4,3 1,0 4,4 28,38 3,95 -43,95zm-206 0c-13,0 -32,-8 -40,-16 -43,-40 -4,-110 53,-96 25,6 36,20 42,44 1,8 2,10 1,16 0,2 -2,6 -2,7 -3,13 -2,22 -22,34 -9,5 -20,11 -32,11zm-3 -169l-33 0c0,-42 -12,-66 4,-133l14 -48c2,-5 1,-2 4,-7l25 -50c16,-26 10,-15 28,-38 8,-11 10,-15 20,-24 14,-13 30,-28 46,-39 19,-12 33,-21 54,-31 69,-35 159,-38 232,-19 9,2 9,3 18,5 24,6 66,30 85,43l67 62c34,41 43,60 63,108 9,21 19,87 19,110 0,23 -5,38 -5,61l-33 0c0,-55 43,-43 -119,-43l0 43 -32 0 0 -43 -137 0 0 43 -32 0 0 -43 -137 0 0 43 -32 0 0 -43 -116 0c-15,0 -3,15 -3,43z"/>
		</svg>
        <figcaption>Социо энергия</figcaption>
       </figure>
		</div>

    <!-- tooltip for techno -->
    <div class="tooltip_templates">
      <span id="tooltip_content_techno">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </span>
    </div>


		<div class="features three techno tooltip" data-tooltip-content="#tooltip_content_techno">
			<figure>
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="139px" height="139px" version="1.1" style="shape-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2250 2250" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path class="fil0" d="M1188 1911l0 0zm0 0c-31,-1 -23,-21 -59,-6 -23,10 -28,17 -31,47l-45 0c-5,-24 -14,-31 -37,-37 -30,-6 -26,1 -48,16l-37 -16c0,-64 8,-25 -25,-73l-40 0 -13 -37 26 -28 -6 -46 -28 -16 8 -45c30,0 36,-2 48,-22 19,-33 4,-23 1,-56l29 -28c26,13 39,22 68,2 28,-19 -13,-41 59,-43 13,26 6,32 39,39 29,7 30,-1 50,-19l37 21c-5,61 -3,32 25,73l36 -5 17 42c-30,20 -25,24 -25,70l33 20 -8 41c-36,3 -36,3 -50,28 -21,37 0,19 1,58l-25 20zm-20 -956c0,-18 30,-22 32,-49 31,1 28,17 45,17 4,0 57,-18 62,-21l13 -40 60 -10c11,40 21,37 53,43 20,3 24,10 38,1 11,-7 18,-22 32,-22 0,0 38,16 40,17 13,10 9,25 9,48l53 41 44 -9 29 46c-22,42 -22,39 1,89 11,23 26,9 40,25 10,10 9,38 12,53 -33,22 -35,8 -42,56 -8,51 -3,29 22,67l-20 49 -41 0c-31,45 -52,33 -37,98l-45 33c-66,-36 -32,-13 -102,3 -1,46 -27,46 -70,49 -10,-43 -32,-44 -85,-49l-32 30c-1,-1 -45,-19 -45,-19 -14,-10 -9,-29 -9,-51 -16,-5 -51,-37 -53,-37 -16,0 -28,5 -41,8l-34 -44 21 -38c-36,-79 -1,-49 -69,-81l-4 -49 41 -29c0,-22 6,-48 6,-58 -1,-41 -50,4 -6,-89l45 0c58,-86 37,-25 37,-78zm-780 -273l45 -32 49 28 52 -23 12 -55 58 -12c29,54 31,45 82,45 13,0 27,-35 41,-45l53 12 12 57 49 20 50 -27 48 33c-1,15 -12,45 -10,55 4,18 25,21 31,42l53 -5c11,0 34,42 36,50 -28,42 -46,36 -16,98l57 20 3 53 -51 31 -5 51 40 38 -14 60c-73,0 -54,7 -87,45 11,49 21,51 24,57 -52,78 -56,22 -92,27 -8,1 -39,25 -46,30l0 61 -50 21c-25,-17 -32,-45 -68,-36 -19,4 -27,4 -36,22 -5,11 -16,30 -18,38l-57 0 -21 -52c-6,-2 -48,-13 -49,-13 -8,0 -39,34 -44,41 -60,-14 -65,-31 -54,-82 -13,-7 -26,-12 -28,-32 -75,0 -51,47 -110,-21l23 -58 -26 -43 -59 -6 -20 -56 44 -38 -4 -52 -52 -33c1,-49 -2,-54 36,-65 34,-10 33,-26 41,-61l-33 -45 27 -48 55 2c53,-34 37,-37 29,-97zm1173 -327c13,10 20,17 32,28 20,18 20,5 48,5 5,0 26,31 29,37 -14,26 -25,36 -1,79 6,11 23,17 38,19l3 49 -31 18c-1,26 -16,50 -2,68 25,32 5,25 -3,61l-41 0c-38,56 -35,26 -28,81l-37 25c-39,-9 -14,-24 -57,-8 -28,10 -38,7 -41,45 -67,9 -49,5 -64,-18 -11,-17 -8,-9 -32,-13 -45,-7 -26,-4 -59,18l-40 -18 -1 -39c-12,-8 -21,-15 -31,-26 -22,-20 -15,-7 -47,-7 -11,0 -24,-27 -32,-36 16,-30 24,-22 10,-56 -13,-33 -9,-33 -47,-42l-3 -49 33 -19c17,-73 0,-63 -14,-83l18 -45 39 0 36 -43 -7 -39 41 -25c28,15 23,20 57,8 38,-13 25,-11 41,-44 18,-2 10,-4 41,-4 29,0 -13,33 81,41l29 -25 44 22 -2 35zm-1561 743c0,154 17,310 79,448l43 96c25,38 47,87 76,124 20,27 37,56 60,79 17,16 11,22 32,37 22,17 17,20 32,37l72 63c18,14 16,18 38,32 71,44 98,82 216,131 16,7 31,14 48,22 17,8 31,13 49,20 135,50 257,63 406,63 118,0 294,-30 400,-82 15,-7 32,-14 48,-21 60,-26 128,-65 177,-102l151 -126c13,-14 12,-21 31,-35 22,-17 106,-132 120,-157 9,-17 12,-17 23,-38l86 -184c51,-141 63,-250 63,-407 0,-126 -25,-260 -72,-372 -10,-25 -38,-100 -50,-118 -25,-38 -48,-87 -76,-124l-92 -117c-22,-16 -17,-19 -33,-36l-72 -63c-18,-14 -15,-19 -37,-32 -71,-44 -98,-82 -216,-132 -190,-80 -272,-104 -504,-104 -117,0 -293,30 -400,82 -86,42 -136,57 -224,123l-152 126c-13,14 -11,21 -30,35 -13,10 -50,58 -63,76 -27,37 -58,76 -80,119l-47 92c-65,144 -102,278 -102,445zm556 -212c-1,-64 1,-49 187,-49 35,0 25,30 25,65l0 278c-18,5 -7,8 -21,8l-106 0c-36,0 -86,8 -86,-28l1 -274zm-193 110l0 33c0,155 138,279 295,283 98,3 122,-28 167,-44 26,-8 89,-80 103,-111 39,-84 36,-97 36,-177 0,-26 -23,-88 -33,-106 -48,-92 -147,-164 -265,-164 -159,0 -303,132 -303,286zm1029 331c-52,0 -57,-73 4,-73 5,0 17,10 18,17 4,20 -10,-3 4,18 18,24 -24,38 -26,38zm-32 -94c-23,15 -28,-3 -37,-16 24,-28 74,-35 109,-19 21,10 27,38 -3,39 -20,0 -33,-28 -69,-4zm-57 -37l-9 0c-6,-23 -16,-4 -16,-24 0,-20 99,-78 188,-29 36,20 45,25 12,53 -53,-28 -27,-32 -106,-32 -24,0 -63,15 -69,32zm-70 -69c72,-83 239,-82 310,0 -35,66 -30,-25 -159,-25 -114,0 -116,90 -151,25zm159 314c129,0 241,-113 241,-236l0 -25c0,-113 -114,-229 -228,-229l-41 0c-90,0 -170,76 -206,158 -15,37 -17,60 -16,100 1,35 -4,12 8,46 19,56 24,72 68,116 39,39 97,70 174,70zm-118 -824c0,-38 30,-35 44,-59 15,-26 25,-48 62,-48 20,0 34,7 45,16 31,24 22,4 49,18 21,10 7,16 35,29 52,26 14,88 -10,88l-180 0c-21,0 -45,-25 -45,-44zm184 -123c33,0 78,25 65,53 -28,-3 -6,-37 -73,-37 0,-8 -1,-16 8,-16zm-17 -29c40,0 54,-2 79,16 17,12 35,30 36,58 -21,-2 -20,-22 -36,-38 -8,-7 -42,-23 -54,-23 -15,0 -21,17 -25,-13zm-232 86l0 41c0,103 102,192 212,192 105,0 204,-93 204,-196l0 -33c0,-135 -193,-271 -348,-136 -28,25 -68,84 -68,132zm-53 1237c-14,4 -44,6 -56,10 -21,6 -32,39 -79,3 -18,-14 -8,-4 -33,-4 -73,0 -33,-143 70,-143 34,0 66,22 81,41 24,30 26,55 17,93zm-245 -57c0,210 294,197 294,8 0,-77 -64,-147 -152,-147 -73,0 -142,66 -142,139zm-310 -816c-1,-30 19,-21 61,-21 27,0 46,-1 65,0l0 217 -127 0c8,-70 3,-126 1,-196zm-25 220c37,9 116,4 159,4 10,0 16,-7 16,-16l0 -241c0,-9 -3,-12 -12,-12 -192,0 -164,-15 -163,57l0 208zm526 621l29 0 0 8 -29 0 0 -8zm-122 0l33 0 0 8 -33 0 0 -8zm82 24c-21,0 -25,-3 -25,-24 0,-23 22,-9 40,-25 13,-11 19,-23 34,-32 9,19 4,10 -22,39 -22,25 -3,42 -27,42zm-9 -61l0 -37c7,5 9,1 9,13l0 12c0,12 -8,12 -9,12zm-49 -12c9,-4 1,-7 14,6 9,9 8,7 11,18 -14,-4 -24,-19 -24,-21 -1,0 0,-2 -1,-3zm-32 37c0,42 2,34 34,33 36,0 10,20 60,20 12,0 13,-11 24,-17 21,-10 53,16 53,-24 0,-38 -39,-82 -73,-82l-21 0c-36,0 -77,37 -77,70zm-339 -895c0,2 -1,4 0,6 9,14 40,10 57,6 4,-1 2,-3 4,-4 -11,-16 -8,-12 -49,-12 -5,0 -11,3 -12,4zm678 -224c1,-41 17,-23 32,-45 -18,-16 -48,15 -48,33 0,12 4,11 16,12zm32 -78c14,11 20,-5 36,-9 10,-2 16,5 17,-15 -32,0 -39,4 -53,24zm107 61c22,-6 8,-10 23,-17 19,-10 17,7 30,-11 -14,-8 -53,-10 -53,28zm-801 548c1,9 2,9 4,16 61,-1 -4,-46 -4,-16zm711 77l0 -4 -5 3 5 1zm-253 -16l1 -1c0,0 -2,0 -1,1zm65 629l1 -2c0,0 -2,1 -1,2zm241 -629l1 -1c0,0 -2,0 -1,1zm-498 629l1 -2c0,0 -2,1 -1,2z"/>
				</svg>
        <figcaption>Техно энергия</figcaption>
       </figure>
		</div>

    <!-- tooltip for techno -->
    <div class="tooltip_templates">
      <span id="tooltip_content_person">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </span>
    </div>

		<div class="features four person tooltip" data-tooltip-content="#tooltip_content_person">
			<figure>
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="139px" height="139px" version="1.1" style="shape-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 242 242" xmlns:xlink="http://www.w3.org/1999/xlink">
   			   <path class="fil0" d="M105 52c0,-18 23,-25 33,-9 6,11 -2,27 -16,26 -10,0 -17,-8 -17,-17zm16 -52c6,0 11,0 17,1 5,1 10,1 13,3 0,0 0,0 0,0l0 0c12,3 22,7 32,13 3,2 13,8 15,10 0,0 0,1 0,1 1,0 2,1 2,1 1,1 2,2 3,3 1,1 2,1 2,2 1,0 1,0 1,1l1 1c1,1 1,0 1,1l3 3c1,1 2,1 2,2 1,1 1,2 2,2 2,3 4,6 6,8l0 1c3,3 5,7 7,10l1 3c1,1 2,5 4,8 0,0 0,0 0,1 0,0 0,1 1,1 0,1 0,0 0,1 0,0 0,0 0,0l0 0c2,5 3,9 4,14l1 1c2,6 2,13 3,20 0,3 0,6 0,9 0,7 0,14 -1,20 -1,1 -1,2 -1,3 -1,5 -3,13 -5,18l0 1c-2,6 -5,13 -9,19l0 0 0 0c-1,1 -1,2 -2,3l0 1c-1,1 -2,3 -3,4 -1,0 -1,1 -1,1 -1,1 -2,3 -3,4 0,1 -1,2 -1,2l-8 9c-1,1 -2,1 -3,2 0,1 -1,1 -2,2 -1,2 -4,3 -6,5 0,1 0,1 -1,1 -3,2 -6,5 -9,7 -1,0 -1,0 -1,1 -4,2 -9,5 -13,7 -1,0 -1,0 -1,0 -2,1 -5,2 -7,3 0,0 0,0 0,0 -4,1 -7,3 -10,4 -2,0 -4,1 -5,1 -6,2 -12,2 -19,3 -3,0 -7,0 -10,0 -8,0 -15,-1 -23,-2l0 0c-2,0 -5,-1 -7,-1l0 -1c-5,-1 -10,-2 -14,-4l-1 0c0,0 0,0 0,0l-1 -1c-10,-4 -20,-10 -28,-16 0,0 0,0 0,0 -1,-1 -2,-1 -2,-2 -3,-2 -5,-4 -7,-6 -1,0 -1,-1 -2,-1 -1,-1 -1,-2 -2,-3 -1,0 -2,-1 -2,-2 0,0 -1,0 -1,0l0 -1c-7,-7 -12,-16 -17,-24 0,-1 0,-1 -1,-1 0,-1 -1,-3 -1,-4 -4,-7 -6,-14 -8,-22 -2,-4 -3,-10 -3,-16 -1,-5 -1,-9 -1,-14 0,-4 0,-7 1,-11 0,-5 1,-10 2,-15l0 -3c2,-5 3,-10 5,-15l0 0c0,0 0,0 0,-1 0,0 1,0 1,0 0,0 0,0 0,0l0 -1c2,-5 5,-10 7,-14l0 0c1,-1 0,-1 1,-2l2 -3c0,-1 2,-3 3,-4 0,0 0,0 0,-1 1,-1 3,-3 4,-5 2,-2 4,-5 6,-6 1,-2 3,-4 5,-6l0 0 0 0c5,-4 9,-8 14,-12 5,-4 11,-7 16,-9 4,-2 9,-4 13,-6l1 0c0,0 1,0 1,-1 3,-1 6,-1 9,-2 4,-2 11,-3 17,-3 5,-1 9,-1 13,-1zm-60 45c0,-5 4,-8 6,-8 6,0 9,6 14,10l15 15c0,0 0,0 0,0l4 4c3,3 9,9 11,11 5,-4 10,-6 17,-4 2,1 3,2 5,2l26 -25c0,-1 0,-1 1,-1 0,0 0,0 0,0l1 -2c6,-5 11,-14 18,-8 2,1 2,4 2,6 0,4 -5,8 -9,12 -4,4 -29,30 -31,31 1,5 0,36 0,43 0,2 0,3 0,5 0,1 0,3 0,5l0 62c0,12 -15,11 -15,1l0 -52 -6 0 0 50c0,12 -9,11 -13,8 -2,-1 -2,-3 -2,-6 0,-23 -1,-45 0,-68l0 -45c-3,-1 -20,-19 -23,-22l-17 -17c-2,-2 -4,-4 -4,-7z"/>
				</svg>
        <figcaption>Энергия личности</figcaption>
       </figure>
		</div>
	</div>

<!--      <span class="features one bio">Био</span>
     <span class="features two techno">Техно</span>
     <span class="features three socio">Социо</span>
     <span class="features four person">Личность</span> -->
     <div id="containerCanvas" style="opacity: 0;">
      <canvas width="4" height="3" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags" style="display: none;">
         <? include '../admin/advantages/tags.php'; ?>  

        <!--  <ul>
        <li><a href="#" class="bio techno socio person tooltip-tag" data-tooltip-content="#tooltip_claud_tag_01"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="bio techno socio tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="bio techno tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="bio socio tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="socio person tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="person tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="socio tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
        <li><a href="#" class="socio tooltip-tag"><img src="/omega/images/icons/lift.png"></a></li>
      </ul>


          <div class="tooltip_templates">
            <span id="tooltip_claud_tag_01" class="tooltip_cloud_tag" >
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </span>
          </div>  -->
    </div>
  
   <!-- <div style="position: absolute; top: 10px; left: 10px; color: white;">
      
   </div> -->

    <span class="close-home bgvid-link-13" style="opacity: 1;">×</span>
		
    <!-- END documents-popup  -->


    </header>

      <!-- overlay -->
  <div class="overlay"></div>

  <!-- START footer video-popup   -->
  <div id="video-popup" style="display: none;">
    <video id="video-content" width="100%" loop="loop" >
   		 <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
        <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
    </video>
    <span class="close-video-popup">&times;</span>
  </div>
<!-- END footer video-popup   -->  



<!-- new navigation -->
  <div class="snt-prev snt-link bgvid-link-02 hvr-grow tooltip-nav-lr" title="О комплексе" style="opacity: 0;"></div>
  <div class="snt-start snt-link bgvid-link-01 hvr-grow tooltip-nav" title="Начало" style="opacity: 0;"></div>
  <div class="snt-next snt-link bgvid-link-04 hvr-grow tooltip-nav-lr" title="Расположение" style="opacity: 0;"></div>



<!-- Painting  main icons -->
 <script>
      
  $('#tags a').click(function(e){

	  $('.bio path').css('fill', '#fff');
  	$('.techno path').css('fill', '#fff');
  	$('.socio path').css('fill', '#fff');
  	$('.person path').css('fill', '#fff');
   
        if($(this).hasClass('bio') && $(this).hasClass('techno') && $(this).hasClass('socio') && $(this).hasClass('person')){

        	$('.bio path').css('fill', '#156e0a');
        	$('.techno path').css('fill', '#ebd127');
        	$('.socio path').css('fill', '#2236e2');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('techno') && $(this).hasClass('socio')) {

          $('.bio path').css('fill', '#156e0a');
        	$('.techno path').css('fill', '#ebd127');
        	$('.socio path').css('fill', '#2236e2');
          
        } else if ($(this).hasClass('tehno') && $(this).hasClass('person') && $(this).hasClass('socio')) {
          
        	$('.techno path').css('fill', '#ebd127');
        	$('.socio path').css('fill', '#2236e2');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('person') && $(this).hasClass('socio')) {
          
          $('.bio path').css('fill', '#156e0a');
        	$('.socio path').css('fill', '#2236e2');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('person') && $(this).hasClass('techno')) {
          
          $('.bio path').css('fill', '#156e0a');
        	$('.techno path').css('fill', '#ebd127');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('techno')) {
          
          $('.bio path').css('fill', '#156e0a');
        	$('.techno path').css('fill', '#ebd127');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('socio')) {
          
          $('.bio path').css('fill', '#156e0a');
        	$('.socio path').css('fill', '#2236e2');
          
        } else if ($(this).hasClass('bio') && $(this).hasClass('person')) {
          
          $('.bio path').css('fill', '#156e0a');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('techno') && $(this).hasClass('socio')) {
          
        	$('.techno path').css('fill', '#ebd127');
        	$('.socio path').css('fill', '#2236e2');
          
        } else if ($(this).hasClass('techno') && $(this).hasClass('person')) {
          
        	$('.techno path').css('fill', '#ebd127');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('socio') && $(this).hasClass('person')) {
          
        	$('.socio path').css('fill', '#2236e2');
        	$('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('socio')) {
          
          $('.socio path').css('fill', '#2236e2');
          
        } else if ($(this).hasClass('person')) {
          
          $('.person path').css('fill', '#b02525');
          
        } else if ($(this).hasClass('techno')) {
          
          $('.techno path').css('fill', '#ebd127');
          
        } else if ($(this).hasClass('bio')) {
          
          $('.bio path').css('fill', '#156e0a');
          
        }

        e.preventDefault;
      });
        
</script>


<script>

  //   pathes
var user = detect.parse(navigator.userAgent);
if (user.browser.family === 'Safari' || user.browser.family === 'IE') {
  
  // video night mp4
  funcPathVidNightMp4();

  // video day mp4
  funcPathVidDayMp4();

} else {

  // video night webm
  funcPathVidNightWebm();

  // video day webm
  funcPathVidDayWebm ();
}

  //текущее время
  var date = new Date();
  var daytime = date.getHours();

  // функция замены ссылок + анимация ДЕНЬ и НОЧЬ
  var funcAnimation = function (pathVid, pathImgDay, pathImgNight, opacityBgimg, opacityBgimgBack, opacityDelay, displayStyleNight, displayStyleDay) {
    $('#bgvid').attr('src', pathVid);
    $('#bgimg').attr('src', pathImgDay);
    $('#bgimg-back').attr('src', pathImgNight);
    $('#bgimg').animate({ opacity: opacityBgimg }, opacityDelay);
    $('#bgimg_back').animate({ opacity: opacityBgimgBack }, opacityDelay);
    $('#bgvid-link-night').attr('src', pathIconNight);
    $('#bgvid-link-day').attr('src', pathIconDay);
    $('#bgvid-link-night').css('display', displayStyleNight);
    $('#bgvid-link-day').css('display', displayStyleDay);
  };

  if (document.cookie == false) {
    // условия зависимости контента от времени суток
     if (daytime >= 8 && daytime <= 17) { // day
      console.log ("день");
      document.cookie = "daynight=";
      document.cookie = "daynight=day; expires=3600";
      console.log (pathVidDay01);

      // вызываем функцию замены ссылок и анимации для дня
      funcAnimation ( pathVidDay03, pathImgDay03, pathImgNight03, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight03, pathImgDay03, pathImgNight03, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay03, pathImgDay03, pathImgNight03, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight03, pathImgDay03, pathImgNight03, 0, 1, 0, 'none', 'block' );

        // записываем глобальные переменные для ночи
        funcSessionStorageNight ();
      }
     
  }

$('#bgvid-link-day').click(function(){

  // записываем глобальные переменные для дня
  funcSessionStorageDay ();

  document.cookie = "daynight=";
  document.cookie = "daynight=day; expires=3600";

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidDay03, pathImgDay03, pathImgNight03, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight03, pathImgDay03, pathImgNight03, 0, 1, 1000, 'none', 'block' );

});

// забираем переменные из sessionStorage
  var linkBgvid01 = sessionStorage.getItem('linkBgvid01');
  var linkBgimg01 = sessionStorage.getItem('linkBgimg01');
  var linkBgvid02 = sessionStorage.getItem('linkBgvid02');
  var linkBgimg02 = sessionStorage.getItem('linkBgimg02');
  var linkBgvid03 = sessionStorage.getItem('linkBgvid03');
  var linkBgimg03 = sessionStorage.getItem('linkBgimg03');
  var linkBgvid04 = sessionStorage.getItem('linkBgvid04');
  var linkBgimg04 = sessionStorage.getItem('linkBgimg04');
  var linkBgvid05 = sessionStorage.getItem('linkBgvid05');
  var linkBgimg05 = sessionStorage.getItem('linkBgimg05');
  var linkBgvid06 = sessionStorage.getItem('linkBgvid06');
  var linkBgimg06 = sessionStorage.getItem('linkBgimg06');
  var linkBgvid07 = sessionStorage.getItem('linkBgvid07');
  var linkBgimg07 = sessionStorage.getItem('linkBgimg07');
  var linkBgvid08 = sessionStorage.getItem('linkBgvid08');
  var linkBgimg08 = sessionStorage.getItem('linkBgimg08');
  var linkBgvid09 = sessionStorage.getItem('linkBgvid09');
  var linkBgimg09 = sessionStorage.getItem('linkBgimg09');
  var linkBgvid10 = sessionStorage.getItem('linkBgvid10');
  var linkBgimg10 = sessionStorage.getItem('linkBgimg10');
  var linkBgvid11 = sessionStorage.getItem('linkBgvid11');
  var linkBgimg11 = sessionStorage.getItem('linkBgimg11');
</script>

<!-- Чтобы при переходе на следующую страницу не появлялся контент из предыдущей, необходимо в функцию funcIconAnimationOut, funcIconAnimationIn добавить эффекты появления и исчезания данного контента -->
<script>
  $('.snt-next, .snt-start, .snt-prev').on("click", funcIconAnimationOut );
  $('.main-menu-btn').on("click", funcAnimMenuIn );
  $('.close-main-menu, .overlay').on("click", funcAnimMenuOut );
</script>
<!-- Animation icons when the page have been loaded -->
<script>
    setTimeout ( funcIconAnimationIn, 700 );
</script>


  <!--  tooltips Init -->
  <script>
    // for main icons
    $('.tooltip').tooltipster({
      theme: 'tooltipster-borderless',
      trigger: 'click',
      interactive: true,
      maxWidth: '350',
      side: ['bottom' , 'top']
    });

    // for navigation icons
    $('.tooltip-nav').tooltipster({
      theme: 'tooltipster-borderless',
      side: 'bottom',
        delay: 0
    });

    $('.tooltip-nav-lr').tooltipster({
      theme: 'tooltipster-borderless',
      side: ['left', 'right'],
        delay: 0
    });

    // for cloud tags
      $('.tooltip-tag').tooltipster({
      theme: 'tooltipster-punk',
      trigger: 'click',
      interactive: true,
      maxWidth: '350',
      //timer: 10000,
      side: ['bottom']
    });
    
  </script>
   <!--END floating tooltips -->



  <!-- появление и отключение попапа видеоролик (этот скрипт должен быть на каждой странице и в футере) -->
  <script>
    $('.video-popup').click(function () {
        $("#video-popup, .overlay").fadeIn();

        setTimeout(function(){$("#video-content")[0].play()}, 0);
      });
    
    $('.overlay, .close-video-popup').click(function () {
      $("#video-popup, .overlay").fadeOut();
    });
  </script>

<!-- Облако тэгов инициализация -->
  <script>
	function canvasInit() {
	if(!$('#myCanvas').tagcanvas({
	  textColour: '#fff',
	  outlineColour: '#ebd127',
	  reverse: true,
	  stretchX: 1.33,
	  depth: 0.8,
	  maxSpeed: 0.05,
	  wheelZoom: false,
	  shuffleTags: true,
	  clickToFront: 600,
	  initial: [0,0.1],
    outlineRadius: 100,
    outlineThickness: 5,
    outlineOffset: -5,
	  dragControl: "true"
	},'tags')) {
	  // something went wrong, hide the canvas container
	  $('#myCanvasContainer').hide();
	}
	}
	setTimeout(function(){
		$('#containerCanvas').animate({opacity: 1});
		canvasInit();
	}, 500) 
</script>

<!-- Ресайз блока canvas (адаптивность)-->
  <script>
  function resizeCanvas(){
    var con = document.getElementById("containerCanvas"),
        canvas = document.getElementById("myCanvas"),
        aspect = canvas.height/canvas.width,    
        width = con.offsetWidth,
        height = con.offsetHeight;
    canvas.width = width;
    canvas.height = Math.round(width * aspect * 0.75);

}
resizeCanvas();
  </script>

</div> <!--END pjax-global -->    

<?
require_once('../footer.php');
?>