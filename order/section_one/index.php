<?php 

// meta tags
$title = "Section one"; ///---
$description = "DESCRIPTION";
$manifest = "order.manifest";

require_once('../../header.php');
include '../../admin/flat_info.php';
?> 

<link rel="stylesheet" href="slider/bootstrap.css">

<script src="slider/bootstrap.min.js"></script>


<style type="text/css">
	polygon {cursor: pointer;}

  .flat-info {
    position: absolute;
    text-align: center;
    color: #fff;
    z-index: 101;
    display: block;
    pointer-events: none;
    font-size: 15px;
    height: 20px;
    width: 60px;
    overflow: hidden;
    transition: 0.3s;

  }

  .flat-desc {
    font-size: 12px;
    display: none;
    text-transform: lowercase;
    border-top: 1px solid #fff;
    line-height: 12px;
    padding: 5px 0;
  }

  .carousel-inner img {max-height: 300px;}


  svg:hover + .flat-info > .flat-desc {display: block; }

  svg:hover + .flat-info {height: 50px; }

  #tooltip_i_icon {
  	max-width: 215px;
    display: inline-block;
    height: auto;
    text-align: center;
    font-size: 12px;
    white-space: normal;
    padding: 8px 0;
  }

 .call-me-btn {
 	margin: 10px auto 0 auto;
 	display: block;
 	padding:10px 15px;
 	background: #fad258;
 	text-align: center;
 	color: #000;
 	font-weight: 700;
 	border: none;
    outline: none;
 }

	
.close-left-slide {
    position: absolute;
    z-index: 6;
    left: 100%;
    background: none;
    color: #fff;
    border: none;
    font-size: 70px;
    top: 0;
    line-height: 70px;
    right: 0px;
    outline: none;
  }

  .flat-01 {
    left: 384px;
    bottom: 337px;
  }

  .flat-02 {
    left: 451px;
    bottom: 393px;
  }

  .flat-03 {
    left: 546px;
    bottom: 480px;
  }

  .flat-04 {
    left: 606px;
    bottom: 532px;
  }

  .flat-05 {
    left: 662px;
    bottom: 580px;
  }

  .flat-06 {
    left: 714px;
    bottom: 628px;
  }

  .flat-07 {
    left: 767px;
    bottom: 670px;
  }

  .flat-08 {
    left: 815px;
    bottom: 716px;
  }

  .flat-09 {
    left: 300px;
    bottom: 317px;
  }

  .flat-10 {
    left: 279px;
    bottom: 369px;
  }

  .flat-11 {
    left: 365px;
    bottom: 386px;
  }

  .flat-12 {
    left: 353px;
    bottom: 432px;
  }

  .flat-13 {
    left: 429px;
    bottom: 442px;
  }

  .flat-14 {
    left: 422px;
    bottom: 493px;
  }

  .flat-15 {
    left: 527px;
    bottom: 524px;

  }

  .flat-16 {
    left: 518px;
    bottom: 575px;
  }

  .flat-17 {
    left: 587px;
    bottom: 574px;
  }

  .flat-18 {
    left: 581px;
    bottom: 628px;
  }

  .flat-19 {
    left: 645px;
    bottom: 621px;
  }

  .flat-20 {
    left: 638px;
    bottom: 676px;
  }

  .flat-21 {
    left: 700px;
    bottom: 667px;
  }

  .flat-22 {
    left: 693px;
    bottom: 720px;
  }

  .flat-23 {
    left: 748px;
    bottom: 712px;
  }

  .flat-24 {
    left: 743px;
    bottom: 766px;
  }

  .flat-25 {
    left: 802px;
    bottom: 750px;
  }

  .flat-26 {
    left: 794px;
    bottom: 806px;
  }

  .flat-27 {
    left: 266px;
    bottom: 414px;
  }

  .flat-28 {
    left: 250px;
    bottom: 476px;
  }

  .flat-29 {
    left: 341px;
    bottom: 478px;
  }

  .flat-30 {
    left: 328px;
    bottom: 536px;
  }

  .flat-31 {
    left: 413px;
    bottom: 532px;
  }

  .flat-32 {
    left: 400px;
    bottom: 594px;
  }

  .flat-33 {
    left: 512px;
    bottom: 617px;
  }

  .flat-34 {
    left: 503px;
    bottom: 675px;
  }

  .flat-35 {
    left: 571px;
    bottom: 668px;
  }

  .flat-36 {
    left: 566px;
    bottom: 723px;
  }

  .flat-37 {
    left: 634px;
    bottom: 715px;
  }

  .flat-38 {
    left: 626px;
    bottom: 771px;
  }

  .flat-39 {
    left: 688px;
    bottom: 761px;
  }

  .flat-40 {
    left: 682px;
    bottom: 818px;
  }

  .flat-41 {
    left: 739px;
    bottom: 806px;
  }

  .flat-42 {
    left: 736px;
    bottom: 859px;
  }

  .flat-43 {
    left: 790px;
    bottom: 847px;
  }

  .flat-44 {
    left: 789px;
    bottom: 900px;
  }

  .flat-45 {
    left: 245px;
    bottom: 523px;
  }

  .flat-46 {
    left: 218px;
    bottom: 584px;
  }

  .flat-47 {
    left: 318px;
    bottom: 578px;
  }

  .flat-48 {
    left: 300px;
    bottom: 645px;
  }

  .flat-49 {
    left: 391px;
    bottom: 636px;
  }

  .flat-50 {
    left: 377px;
    bottom: 699px;
  }

  .flat-51 {
    left: 499px;
    bottom: 716px;
  }

  .flat-52 {
    left: 486px;
    bottom: 780px;
  }

  .flat-53 {
    left: 563px;
    bottom: 767px;
  }

  .flat-54 {
    left: 552px;
    bottom: 826px;
  }

  .flat-55 {
    left: 624px;
    bottom: 813px;
  }

  .flat-56 {
    left: 614px;
    bottom: 876px;
  }

  .flat-57 {
    left: 681px;
    bottom: 855px;
  }

  .flat-58 {
    left: 673px;
    bottom: 920px;
  }

  .flat-59 {
    left: 733px;
    bottom: 897px;
  }

  .flat-60 {
    left: 728px;
    bottom: 962px;
  }

  .flat-61 {
    left: 789px;
    bottom: 937px;
  }

  .flat-62 {
    left: 780px;
    bottom: 1002px;
  }



</style>


<body>
<?
/* 

* [brief] - выводит информацию на основной странице
* [brief][status] - может быть только трех типов: свободна, в резерве, куплена.

*/

/*$flat_01 = [
  "brief" => [
    "area" => "72", 
    "status" => "Свободна",
  ],
];*/
?>
<div class="wrapper">

<!-- preloader  -->
<script>
  preloader(true, 'white', 'red');  
</script><!--END preloader  -->



  <div id = "pjax-global" style = "opacity: 0;"> 
    <header>
      <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 0;">
      <button class="main-menu-btn secondary-p menu-buy-p hvr-grow" style="opacity: 0;">Меню</button>
      
      <div id="svg-wrapper">

     

  <div id= "floor01_2" class="floorgroup">

  <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-01" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
      </svg>
      <div class="flat-info flat-01">
        <div>01</div>
        <div class="flat-desc">
          <div><? echo $flat_01["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_01["brief"]["status"];?></div>
        </div>
      </div>
  </div> 
   <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-02" class="fil0 str0" points="354,645 411,596 420,601 425,597 430,601 577,665 587,722 585,725 585,732 536,779 531,777 528,779 520,732 517,722 368,653 366,650 " />
      </svg>
      <div class="flat-info flat-02">
        <div>02</div>
        <div class="flat-desc">
          <div><? echo $flat_02["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_02["brief"]["status"];?></div>
        </div>
      </div>
    </div>  
   
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-03" class="fil0 str0" points="507,517 518,522 522,519 523,520 523,521 668,581 671,578 688,584 689,585 691,610 691,614 684,621 685,632 685,636 641,678 639,679 634,677 623,689 622,688 614,633 466,570 465,566 463,565 460,567 459,567 458,561 459,559 459,558 459,557 459,557 461,556 "/>
      </svg>
      <div class="flat-info flat-03">
        <div>03</div>
        <div class="flat-desc">
          <div><? echo $flat_03["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_03["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-04" class="fil0 str0" points="684,620 691,614 688,586 688,585 667,576 527,518 527,517 526,516 526,516 522,519 521,519 521,518 520,512 520,511 520,510 521,509 522,506 519,505 514,503 522,496 534,485 545,476 562,462 569,464 581,469 581,472 587,475 602,481 665,505 725,529 725,532 731,534 732,535 734,561 734,563 731,565 731,566 734,567 734,567 735,581 736,585 735,587 734,588 726,596 693,628 692,629 691,628 690,628 685,625 "/>
      </svg>
      <div class="flat-info flat-04">
        <div>04</div>
        <div class="flat-desc">
          <div><? echo $flat_04["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_04["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
         <polygon id="svg-flat-05" class="fil0 str0" points="612,420 613,419 615,419 617,420 630,425 635,424 637,426 795,487 786,495 861,525 862,556 848,571 845,570 760,537 761,568 742,586 741,587 736,585 734,567 734,567 731,566 731,565 734,563 734,561 732,535 731,534 727,533 727,526 585,469 585,467 565,459 "/>
      </svg>
      <div class="flat-info flat-05">
        <div>05</div>
        <div class="flat-desc">
          <div><? echo $flat_05["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_05["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
         <polygon id="svg-flat-06" class="fil0 str0" points="673,377 675,376 676,376 679,377 686,379 687,379 689,381 827,432 830,429 840,433 841,436 842,469 902,491 902,515 879,538 878,508 803,479 799,483 641,423 639,421 638,421 634,424 633,410 "/>
      </svg>
      <div class="flat-info flat-06">
        <div>06</div>
        <div class="flat-desc">
          <div><? echo $flat_06["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_06["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
         <polygon id="svg-flat-07" class="fil0 str0" points="723,330 725,328 727,329 739,333 740,339 877,388 877,389 889,392 890,393 891,395 891,397 892,421 891,423 888,426 886,428 886,442 848,479 843,476 841,436 840,433 830,429 692,378 691,376 687,379 686,379 680,377 679,365 680,363 681,363 683,363 "/>
      </svg>
      <div class="flat-info flat-07">
        <div>07</div>
        <div class="flat-desc">
          <div><? echo $flat_07["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_07["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
         <polygon id="svg-flat-08" class="fil0 str0" points="766,292 768,290 770,291 784,295 785,298 786,297 787,298 923,345 923,347 924,350 926,351 927,353 928,378 925,381 927,382 928,399 927,400 927,403 893,435 891,436 888,435 886,434 886,428 891,423 892,421 891,397 891,395 890,393 889,392 877,389 877,388 879,385 742,337 742,332 727,327 766,294 "/>
      </svg>
      <div class="flat-info flat-08">
        <div>08</div>
        <div class="flat-desc">
          <div><? echo $flat_08["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_08["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl01_2.jpg" />
    </div>
    


    <div id= "floor02_1" class="floorgroup">

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-09" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
      </svg>
      <div class="flat-info flat-09">
        <div>09</div>
        <div class="flat-desc">
          <div><? echo $flat_09["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_09["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-11" class="fil0 str0" points="349,618 507,689 510,703 514,704 515,709 519,732 465,784 460,784 452,779 447,783 440,747 290,676 293,673 281,668 283,665 288,666 345,618 "/>
      </svg>
      <div class="flat-info flat-11">
        <div>11</div>
        <div class="flat-desc">
          <div><? echo $flat_11["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_11["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-13" class="fil0 str0" points="402,571 403,567 406,564 418,569 421,565 479,590 572,629 575,632 580,665 578,667 579,676 578,678 527,725 518,723 515,707 513,704 509,685 366,620 359,617 356,618 349,614 "/>
      </svg>
      <div class="flat-info flat-13">
        <div>13</div>
        <div class="flat-desc">
          <div><? echo $flat_13["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_13["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-15" class="fil0 str0" points="518,487 667,546 668,549 684,556 686,557 687,559 690,584 641,630 624,622 619,626 616,597 613,595 610,597 460,534 463,532 452,527 455,525 458,525 500,491 500,488 502,486 515,490 "/>
      </svg>
      <div class="flat-info flat-15">
        <div>15</div>
        <div class="flat-desc">
          <div><? echo $flat_15["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_15["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
       <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-17" class="fil0 str0" points="561,431 721,494 723,504 728,506 729,507 730,509 732,524 732,533 689,575 687,559 686,557 684,556 668,550 667,542 521,484 525,480 508,474 511,471 513,472 "/>
      </svg>
      <div class="flat-info flat-17">
        <div>17</div>
        <div class="flat-desc">
          <div><? echo $flat_17["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_17["brief"]["status"];?></div>
        </div>
      </div> 
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-19" class="fil0 str0" points="611,387 629,394 632,391 778,446 768,455 867,494 868,524 846,545 756,510 739,526 737,526 734,525 732,524 730,509 729,507 728,506 723,504 721,490 579,434 577,435 563,430 609,392 609,389 "/>
      </svg>
      <div class="flat-info flat-19">
        <div>19</div>
        <div class="flat-desc">
          <div><? echo $flat_19["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_19["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-21" class="fil0 str0" points="672,346 682,350 686,347 827,398 829,396 837,399 840,402 841,431 905,454 905,457 902,460 903,483 905,484 905,487 890,502 888,473 789,436 780,445 779,442 637,389 640,386 630,382 633,379 635,380 643,373 642,372 663,355 665,355 671,351 670,348 "/>
      </svg>
      <div class="flat-info flat-21">
        <div>21</div>
        <div class="flat-desc">
          <div><? echo $flat_21["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_21["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>   
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-23" class="fil0 str0" points="723,298 737,302 736,304 875,353 875,360 876,361 888,365 890,366 891,368 892,370 893,390 890,395 853,429 850,429 841,426 840,402 837,399 829,396 829,395 690,344 693,341 676,335 678,333 681,334 "/>
      </svg>
      <div class="flat-info flat-23">
        <div>23</div>
        <div class="flat-desc">
          <div><? echo $flat_23["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_23["brief"]["status"];?></div>
        </div>
      </div>
    </div>

     <div>   
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
          <polygon id="svg-flat-25" class="fil0 str0" points="766,261 783,266 785,265 922,311 923,323 926,324 927,326 927,330 927,349 927,351 926,353 892,384 892,370 891,368 890,366 888,365 877,362 877,351 875,350 725,297 764,266 764,262 "/>
      </svg>
      <div class="flat-info flat-25">
        <div>25</div>
        <div class="flat-desc">
          <div><? echo $flat_25["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_25["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl02_1.jpg" />
    </div>
    

    <div id= "floor02_2" class="floorgroup" >

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-10" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
      </svg>
      <div class="flat-info flat-10">
        <div>10</div>
        <div class="flat-desc">
          <div><? echo $flat_10["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_10["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-12" class="fil0 str0" points="314,560 314,558 316,555 335,563 340,559 343,561 344,567 498,634 500,641 514,647 518,670 518,672 517,674 510,680 512,694 512,696 510,698 460,745 458,746 455,746 451,743 443,750 432,693 274,621 272,623 270,615 253,608 "/>
      </svg>
      <div class="flat-info flat-12">
        <div>12</div>
        <div class="flat-desc">
          <div><? echo $flat_12["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_12["brief"]["status"];?></div>
        </div>
      </div>
    </div>
  
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-14" class="fil0 str0" points="394,502 405,508 409,505 411,507 411,511 565,575 573,631 572,632 573,636 573,639 573,640 572,642 523,686 521,688 519,688 517,688 511,684 510,680 517,674 518,672 518,670 514,647 505,643 503,631 349,564 347,556 346,554 341,558 340,551 342,548 339,546 "/>
      </svg> 
      <div class="flat-info flat-14">
        <div>14</div>
        <div class="flat-desc">
          <div><? echo $flat_14["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_14["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-16" class="fil0 str0" points="493,424 503,429 506,426 510,429 510,433 658,491 661,490 663,491 662,491 672,495 672,497 675,518 674,520 671,524 674,525 675,527 676,544 676,545 674,548 630,588 627,589 625,588 621,586 613,593 610,595 609,594 608,593 602,543 450,480 449,473 452,470 442,465 444,462 446,463 490,428 489,427 "/>
      </svg>  
      <div class="flat-info flat-16">
        <div>16</div>
        <div class="flat-desc">
          <div><? echo $flat_16["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_16["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-18" class="fil0 str0" points="549,374 569,382 567,384 718,441 718,445 723,447 725,448 725,450 727,471 725,474 724,476 726,477 727,478 728,493 728,497 726,500 685,538 684,539 683,540 681,539 676,536 675,527 674,525 671,524 674,520 675,518 672,497 672,495 662,491 663,491 662,490 663,489 513,430 513,423 512,422 503,429 501,428 499,421 499,417 500,414 502,411 "/>
      </svg>  
      <div class="flat-info flat-18">
        <div>18</div>
        <div class="flat-desc">
          <div><? echo $flat_18["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_18["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>    
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-20" class="fil0 str0" points="602,332 606,334 611,330 626,336 627,338 789,397 780,405 857,434 859,470 844,484 753,450 754,474 729,497 728,497 727,478 726,477 724,476 725,474 727,471 725,450 725,448 723,447 721,446 720,438 550,373 "/>
      </svg>  
      <div class="flat-info flat-20">
        <div>20</div>
        <div class="flat-desc">
          <div><? echo $flat_20["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_20["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>     
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-22" class="fil0 str0" points="667,287 676,291 675,292 678,294 681,292 681,295 824,346 827,343 837,347 838,348 839,376 900,398 900,423 904,424 904,427 876,453 875,417 798,389 791,395 631,337 630,328 625,332 624,324 625,322 624,321 "/>
      </svg>  
      <div class="flat-info flat-22">
        <div>22</div>
        <div class="flat-desc">
          <div><? echo $flat_22["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_22["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>     
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-24" class="fil0 str0" points="719,245 729,249 731,248 732,254 874,301 875,303 881,306 883,307 883,330 883,332 880,335 883,336 883,340 883,354 883,356 881,358 848,390 845,391 843,391 839,389 836,391 832,389 830,391 828,345 827,343 684,293 683,285 679,289 679,282 681,279 678,278 "/>
      </svg>  
      <div class="flat-info flat-24">
        <div>24</div>
        <div class="flat-desc">
          <div><? echo $flat_24["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_24["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>    
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-26" class="fil0 str0" points="770,205 780,208 780,215 782,214 921,260 921,266 926,267 927,293 923,297 925,298 926,316 925,318 924,319 893,347 890,349 888,350 885,349 883,347 883,336 880,335 883,332 883,330 883,307 881,306 878,305 877,299 736,251 735,244 731,247 731,241 733,239 731,237 731,236 "/>
      </svg>  
      <div class="flat-info flat-26">
        <div>26</div>
        <div class="flat-desc">
          <div><? echo $flat_26["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_26["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl02_2.jpg" />
    </div>
    
    
    <div id= "floor03_1" class="floorgroup" >
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-27" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
      </svg>  
      <div class="flat-info flat-27">
        <div>27</div>
        <div class="flat-desc">
          <div><? echo $flat_27["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_27["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>   
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-29" class="fil0 str0" points="303,512 306,512 323,520 330,514 333,527 335,525 492,593 495,607 505,611 507,613 512,640 511,643 509,645 507,647 458,691 456,692 454,693 452,693 449,692 437,686 436,686 432,689 424,652 264,580 262,582 259,572 244,566 243,559 "/>
      </svg>  
      <div class="flat-info flat-29">
        <div>29</div>
        <div class="flat-desc">
          <div><? echo $flat_29["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_29["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg id="svg-flat-31" xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon class="fil0 str0" points="384,458 397,465 402,462 404,470 560,534 566,583 510,633 507,614 505,611 496,607 493,590 339,522 337,509 332,513 330,501 "/>
      </svg>
      <div class="flat-info flat-31">
        <div>31</div>
        <div class="flat-desc">
          <div><? echo $flat_31["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_31["brief"]["status"];?></div>
        </div>
      </div> 
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-33" class="fil0 str0" points="484,381 496,386 502,381 504,393 655,452 656,456 666,460 668,461 670,463 672,484 672,486 671,489 670,490 624,532 622,532 620,532 612,529 603,537 598,502 443,441 441,428 439,427 443,425 435,422 434,421 "/>
      </svg>  
      <div class="flat-info flat-33">
        <div>33</div>
        <div class="flat-desc">
          <div><? echo $flat_33["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_33["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-35" class="fil0 str0" points="552,328 564,334 565,344 564,345 565,346 713,400 714,402 715,410 722,414 723,416 725,439 725,442 723,444 679,483 677,484 675,483 671,482 670,463 668,461 660,457 659,449 508,391 506,377 501,382 500,376 499,373 500,370 502,367 "/>
      </svg>  
      <div class="flat-info flat-35">
        <div>35</div>
        <div class="flat-desc">
          <div><? echo $flat_35["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_35["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-37" class="fil0 str0" points="554,327 605,288 617,293 621,290 622,300 770,352 770,355 758,367 858,404 860,438 843,454 842,454 750,419 749,421 731,437 727,437 725,435 723,416 722,414 717,411 715,397 566,342 565,333 554,328 "/>
      </svg>  
      <div class="flat-info flat-37">
        <div>37</div>
        <div class="flat-desc">
          <div><? echo $flat_37["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_37["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg id="svg-flat-39" xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon class="fil0 str0" points="662,245 672,250 678,244 679,257 825,308 833,310 836,312 837,337 837,338 902,362 903,365 902,366 902,393 904,393 904,396 888,412 886,377 886,376 786,342 773,353 773,350 626,299 624,286 614,281 "/>
      </svg> 
      <div class="flat-info flat-39">
        <div>39</div>
        <div class="flat-desc">
          <div><? echo $flat_39["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_39["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-41" class="fil0 str0" points="677,232 714,204 716,204 726,208 730,205 730,207 730,216 873,264 874,270 875,271 880,273 882,274 882,276 883,299 883,301 882,304 845,336 843,338 841,338 837,337 836,319 836,313 835,311 833,310 825,308 826,304 681,254 680,243 679,243 675,246 675,238 675,235 676,234 "/>
      </svg>  
      <div class="flat-info flat-41">
        <div>41</div>
        <div class="flat-desc">
          <div><? echo $flat_41["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_41["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg id="svg-flat-43" xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon class="fil0 str0" points="726,195 765,165 775,169 780,165 780,176 921,222 921,234 926,237 926,264 887,299 883,297 882,275 875,271 875,262 733,214 732,202 727,206 "/>
      </svg> 
      <div class="flat-info flat-43">
        <div>43</div>
        <div class="flat-desc">
          <div><? echo $flat_43["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_43["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl03_1.jpg" />
    </div>
    
    <div id= "floor03_2" class="floorgroup" >
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-28" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
      </svg>  
      <div class="flat-info flat-28">
        <div>28</div>
        <div class="flat-desc">
          <div><? echo $flat_28["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_28["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-30" class="fil0 str0" points="321,463 322,467 482,533 482,536 487,538 493,571 492,573 493,577 494,578 495,588 496,595 496,599 495,603 442,648 440,649 438,649 437,649 433,647 425,654 412,592 251,521 249,515 229,506 291,459 292,458 294,458 296,458 317,467 "/>
      </svg>  
      <div class="flat-info flat-30">
        <div>30</div>
        <div class="flat-desc">
          <div><? echo $flat_30["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_30["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-32" class="fil0 str0" points="393,412 551,475 561,541 559,543 559,545 557,547 508,591 506,592 504,593 503,592 495,588 494,578 493,577 492,573 493,571 485,529 327,464 325,457 320,460 318,448 322,446 324,447 374,409 372,408 376,406 386,410 392,406 "/>
      </svg>  
      <div class="flat-info flat-32">
        <div>32</div>
        <div class="flat-desc">
          <div><? echo $flat_32["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_32["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-34" class="fil0 str0" points="474,323 494,331 495,336 647,393 648,389 650,390 651,388 668,394 669,395 670,396 672,428 665,435 666,442 667,448 665,454 618,495 611,492 597,504 590,444 432,383 431,375 426,379 425,375 425,371 427,370 418,366 "/>
      </svg>  
      <div class="flat-info flat-34">
        <div>34</div>
        <div class="flat-desc">
          <div><? echo $flat_34["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_34["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-36" class="fil0 str0" points="534,280 554,288 557,286 557,288 713,345 715,345 717,346 717,350 719,378 716,381 716,382 718,383 719,384 720,397 720,402 720,404 719,406 676,445 675,445 673,445 671,445 666,442 665,435 669,431 672,428 672,425 670,396 669,395 668,394 651,388 650,390 499,333 498,328 478,321 531,280 532,280 "/>
      </svg>  
      <div class="flat-info flat-36">
        <div>36</div>
        <div class="flat-desc">
          <div><? echo $flat_36["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_36["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-38" class="fil0 str0" points="599,238 600,237 602,237 613,242 616,241 616,244 784,302 777,308 854,334 855,335 856,336 857,374 840,390 746,356 748,380 748,382 746,385 730,398 728,400 720,397 719,384 718,383 716,382 716,381 719,378 717,350 717,346 715,345 713,345 712,341 561,286 561,279 555,283 554,278 554,273 556,271 "/>
      </svg>  
      <div class="flat-info flat-38">
        <div>38</div>
        <div class="flat-desc">
          <div><? echo $flat_38["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_38["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-40" class="fil0 str0" points="658,190 673,195 673,201 818,249 820,247 822,246 831,249 832,250 833,251 834,282 897,304 898,328 902,330 902,333 872,359 871,322 792,295 788,299 620,242 620,235 618,235 611,241 607,239 605,226 606,225 610,225 "/>
      </svg>  
      <div class="flat-info flat-40">
        <div>40</div>
        <div class="flat-desc">
          <div><? echo $flat_40["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_40["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-42" class="fil0 str0" points="705,152 721,158 724,156 725,156 726,161 872,208 873,206 880,209 880,211 881,237 880,241 878,243 878,244 879,245 880,246 880,258 881,259 882,263 881,265 879,267 844,299 842,301 840,301 836,299 836,298 835,297 833,256 833,251 832,250 831,249 822,246 820,247 677,200 676,199 675,194 660,188 703,156 703,153 "/>
      </svg>  
      <div class="flat-info flat-42">
        <div>42</div>
        <div class="flat-desc">
          <div><? echo $flat_42["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_42["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-44" class="fil0 str0" points="763,116 765,116 767,116 772,118 773,119 774,121 776,120 777,122 919,167 920,170 929,173 931,174 932,175 932,177 932,201 932,204 930,206 924,212 924,226 923,228 921,230 888,260 886,260 884,259 881,259 880,258 880,246 879,245 878,244 878,243 880,241 881,237 880,211 880,209 873,206 873,205 729,159 729,153 728,153 724,156 724,149 724,146 726,144 "/>
      </svg>  
      <div class="flat-info flat-44">
        <div>44</div>
        <div class="flat-desc">
          <div><? echo $flat_44["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_44["brief"]["status"];?></div>
        </div>
      </div>
    </div>
     
      <img src="img/fl03_2.jpg" />
    </div>
    
    <div id= "floor04_1" class="floorgroup" >
    
    <div> 
    	<svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-45" class="fil0 str0" points="213,462 231,471 235,483 400,554 408,592 356,633 177,584 171,570 152,561 138,514 141,511 144,513 "/>
      </svg>  
      <div class="flat-info flat-45">
        <div>45</div>
        <div class="flat-desc">
          <div><? echo $flat_45["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_45["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-47" class="fil0 str0" points="217,460 281,414 281,411 284,409 303,417 309,412 313,426 475,493 477,506 482,508 487,539 427,589 416,584 411,588 405,550 240,479 237,481 235,468 "/>
      </svg>  
      <div class="flat-info flat-47">
        <div>47</div>
        <div class="flat-desc">
          <div><? echo $flat_47["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_47["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-49" class="fil0 str0" points="377,362 382,358 385,372 547,435 552,485 495,533 487,530 483,506 480,505 476,488 317,423 314,409 309,412 308,400 309,398 313,398 365,358 "/>
      </svg>  
      <div class="flat-info flat-49">
        <div>49</div>
        <div class="flat-desc">
          <div><? echo $flat_49["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_49["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-51" class="fil0 str0" points="470,277 487,284 488,297 646,355 646,358 649,357 665,363 667,365 669,367 669,385 669,396 620,439 617,439 598,431 588,439 585,403 426,343 423,328 411,336 409,318 413,318 "/>
      </svg>  
      <div class="flat-info flat-51">
        <div>51</div>
        <div class="flat-desc">
          <div><? echo $flat_51["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_51["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-53" class="fil0 str0" points="527,234 545,241 550,236 553,250 706,304 707,313 710,314 715,316 716,340 716,347 669,385 669,367 667,365 665,363 649,357 649,351 490,293 489,281 472,275 524,238 525,235 "/>
      </svg>  
      <div class="flat-info flat-53">
        <div>53</div>
        <div class="flat-desc">
          <div><? echo $flat_53["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_53["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-55" class="fil0 str0" points="553,226 593,196 593,194 595,191 601,194 606,196 611,192 612,206 764,256 753,267 855,304 855,341 838,356 745,323 722,342 716,340 715,316 710,314 710,301 556,247 555,233 548,238 548,227 550,225 "/>
      </svg>  
      <div class="flat-info flat-55">
        <div>55</div>
        <div class="flat-desc">
          <div><? echo $flat_55["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_55["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-57" class="fil0 str0" points="601,179 652,143 671,150 672,164 819,213 829,216 833,219 833,241 900,264 901,267 899,268 899,296 902,297 902,300 880,319 879,282 778,246 768,255 616,203 616,191 614,190 606,196 601,194 "/>
      </svg>  
      <div class="flat-info flat-57">
        <div>57</div>
        <div class="flat-desc">
          <div><? echo $flat_57["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_57["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-59" class="fil0 str0" points="652,143 700,108 719,115 722,112 722,124 870,170 871,171 871,177 872,177 880,179 880,204 880,209 840,243 833,241 833,219 829,216 822,214 822,210 821,209 672,161 671,150 "/>
      </svg>  
      <div class="flat-info flat-59">
        <div>59</div>
        <div class="flat-desc">
          <div><? echo $flat_59["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_59["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-61" class="fil0 str0" points="724,100 760,75 759,73 761,71 770,75 775,72 775,86 918,129 919,131 919,139 930,143 931,145 932,173 892,207 880,204 880,179 872,177 872,168 872,167 726,121 726,107 720,112 720,102 721,100 "/>
      </svg>  
      <div class="flat-info flat-61">
        <div>61</div>
        <div class="flat-desc">
          <div><? echo $flat_61["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_61["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl04_1.jpg" />
    </div>
    
    <div id= "floor04_2" class="floorgroup visible" >
    
    <div>       
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-46" class="fil0 str0" points="195,402 218,411 218,414 386,484 400,557 352,597 165,550 147,544 123,459 122,455 123,452 "/>
      </svg>  
      <div class="flat-info flat-46">
        <div>46</div>
        <div class="flat-desc">
          <div><? echo $flat_46["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_46["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-48" class="fil0 str0" points="268,352 288,360 296,354 299,358 464,422 464,428 467,428 467,430 470,430 475,466 473,469 476,473 479,488 479,496 476,499 419,547 413,543 404,550 390,480 222,410 222,406 201,398 "/>
      </svg>  
      <div class="flat-info flat-48">
        <div>48</div>
        <div class="flat-desc">
          <div><? echo $flat_48["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_48["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-50" class="fil0 str0" points="370,300 373,304 535,367 545,433 543,436 544,445 489,490 479,488 476,473 473,469 475,466 470,430 467,430 466,418 303,355 302,351 297,353 295,341 354,300 365,305 "/>
      </svg>  
      <div class="flat-info flat-50">
        <div>50</div>
        <div class="flat-desc">
          <div><? echo $flat_50["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_50["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-52" class="fil0 str0" points="400,260 458,220 476,228 477,229 635,285 638,282 651,287 654,322 649,327 655,328 655,343 656,353 607,393 599,391 585,403 576,335 414,275 414,272 411,271 401,279 399,263 "/>
      </svg>  
      <div class="flat-info flat-52">
        <div>52</div>
        <div class="flat-desc">
          <div><? echo $flat_52["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_52["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-54" class="fil0 str0" points="518,178 538,186 543,182 544,184 699,237 700,240 704,241 708,242 709,276 707,279 708,281 711,283 712,304 712,306 664,346 655,343 655,328 649,327 654,322 651,287 459,219 "/>
      </svg>  
      <div class="flat-info flat-54">
        <div>54</div>
        <div class="flat-desc">
          <div><? echo $flat_54["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_54["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-56" class="fil0 str0" points="588,136 600,140 603,138 605,138 605,141 780,198 770,206 855,232 855,271 836,288 739,255 741,291 721,307 712,304 711,283 708,281 707,279 709,276 708,242 704,241 704,234 548,182 548,178 547,178 541,181 541,170 "/>
      </svg>  
      <div class="flat-info flat-56">
        <div>56</div>
        <div class="flat-desc">
          <div><? echo $flat_56["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_56["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-58" class="fil0 str0" points="657,100 660,97 662,97 662,100 813,146 817,143 818,142 826,145 829,148 830,178 894,199 895,229 899,230 899,233 870,258 869,217 788,190 782,194 609,139 609,135 607,135 603,138 603,127 647,96 "/>
      </svg>  
      <div class="flat-info flat-58">
        <div>58</div>
        <div class="flat-desc">
          <div><? echo $flat_58["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_58["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-60" class="fil0 str0" points="702,57 714,61 716,58 717,58 718,61 877,108 877,142 874,146 878,148 878,163 878,170 839,202 831,195 829,148 826,145 818,142 817,143 667,97 666,94 660,97 660,87 "/>
      </svg>  
      <div class="flat-info flat-60">
        <div>60</div>
        <div class="flat-desc">
          <div><? echo $flat_60["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_60["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg"  version="1.1">
        <polygon id="svg-flat-62" class="fil0 str0" points="716,48 756,19 767,22 770,21 770,23 918,66 918,70 921,71 922,73 922,105 919,110 923,112 923,132 921,135 886,164 884,165 880,164 878,163 878,148 874,146 877,142 877,108 875,107 872,106 870,102 722,59 721,54 716,58 "/>
      </svg>  
      <div class="flat-info flat-62">
        <div>62</div>
        <div class="flat-desc">
          <div><? echo $flat_62["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_62["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
      <img src="img/fl04_2.jpg" />
    </div>
    
       
        
      </div> <!-- END svg-wrapper -->
    
    <!-- START documents-popup   -->  
    <div class="buy-sections section-one" style="opacity: 0;">

    <h1 class="section-title">
      Секция 1
    </h1>

      <table class="buy-table">
        <tbody>
        <tr>
          <td></td>
          <td class="buy-table-title">Этаж</td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td class="buy-table-title">Жилая недвижимость</td>
          <td><span id="fl042" class="floor-num floor-active">04</span></td>
          <td>3-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl041" class="floor-num">04</span></td>
          <td>2-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl032" class="floor-num">03</span></td>
          <td>3-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl031" class="floor-num">03</span></td>
          <td>2-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl022" class="floor-num">02</span></td>
          <td>3-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl021" class="floor-num">02</span></td>
          <td>2-х ярусная</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl012" class="floor-num">01</span></td>
          <td>3-х ярусная</td>
        </tr>
        <tr class="buy-table-divider">
          <td class="buy-table-title">Коммерческая недвижимость</td>
          <td><span id="fl011" class="floor-num">01</span></td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td class="buy-table-title">Паркинг</td>
          <td><span id="fl00" class="floor-num">P-1</span></td>
          <td></td>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- END documents-popup   -->  

      <button class="sound-btn secondary-p"></button>
      <div class="icon-phone secondary-p">
        <div class="icon-phone-animation"></div>
      </div>
    </header>

      <!-- overlay -->
  <div class="overlay"></div>

<<<<<<< HEAD
    <!-- START footer video-popup   -->
      <div id="video-popup" style="display: none;">
        <video id="video-content" width="100%" loop="loop" >
            <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
            <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
        </video>
        <span class="close-video-popup">&times;</span>
      </div>
<!-- END footer video-popup   --> 

=======
>>>>>>> origin/gh-pages
   <!-- main menu -->
  <div class="main-menu">
    <ul>
      <li><div class="snt-link"><a href="/omega/">Главная</a></div></li>
      <li><div class="snt-link"><a href="/omega/about/">О комплексе</a></div></li>
      <li><div class="snt-link"><a href="/omega/advantages/">Преимущества</a></div></li>
      <li><div class="snt-link"><a href="/omega/location/">Расположение</a></div></li>
      <li><div class="snt-link"><a href="/omega/windowview/">Вид из окон</a></div></li>     
      <li><div class="snt-link"><a href="/omega/order/">Купить</a></div></li>
      <li><div class="snt-link"><a href="/omega/apartments/">Аппартаменты</a></div></li>
      <li><div class="snt-link"><a href="/omega/commercial/">Коммерческая недвижимость</a></div></li>
      <li><div class="snt-link"><a href="/omega/progress/">Ход строительства</a></div></li>
      <li><div class="snt-link"><a href="/omega/documents/">Документы</a></div></li>
      <li><div class="snt-link"><a href="/omega/events/">События</a></div></li>
    </ul>
    <span class="close-main-menu">  &times;</span>
  </div>





<!-- left-blocks -->
<style type="text/css">
  
  .mask {
      background: rgba(0, 0, 0, 0.41);
      position: fixed;
      left: 0px;
      top: 0px;
      height: 100%;
      width: 100%;
      display: none;
      z-index: 9;
  }

  .mask-show {display: block;}

  .menu-btn {
    position: absolute;
    z-index: 6;
    left: 100%;
  }
    
  .left-block {    
    position: absolute;
    transform: translateX(-105%);
    padding: 50px;
    top: 0;
    background: #fff;
    height: 100%;
    z-index: 10;
    width: 85%; 
    -webkit-transition: transform 1s;
     -moz-transition: transform 1s;
     -o-transition: transform 1s;
     transition: transform 1s;
  }


  .left-block-show{transform: translateX(0%); width: 85%; background: #fff;}

  .table-flat-info td {
    padding: 0 5px;
  }

  .col-title {
    margin: 30px 0;
  }

  .carousel-inner img{margin: 0 auto;}


  .carousel-control.right {
    background: url(../../images/arrows/slider-right.png) no-repeat;
    background-position: 50%;
  }


.carousel-control.left {
    background: url(../../images/arrows/slider-left.png) no-repeat;
    background-position: 50%;
  }

.btn-about-flat {
  display: block;
  margin: 50px auto;
  font-size: 20px;
  text-align: center;
  border: none;
  outline: none;
  background: #fad258;
  padding: 25px 35px;
  font-weight: 700;
}

.carousel-indicators li {
  border: 1px solid #8e8e8e;
}

.carousel-indicators .active {background-color: #8e8e8e;}

.table-flat-info .i-icon {
	display: inline-block;
	margin: 0 5px;
	width: 12px;
	height: 12px;
	background: url('../../images/icons/i-icon.png') no-repeat;
	cursor: pointer;
}
      
</style>

    <div class="mask"></div>
    <div id = "block-fl01" class="left-block"></div>
    <div id = "block-fl02" class="left-block"></div>
    
<!-- END left-blocks -->




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


<script>
//Скрипт ресайза окна
// фактический размер изображения
var imgWidth = 1920;
var imgHeight = 1080;

// функция ресайза изображения при загрузке
function resize(){
  var xJ = window.innerWidth / imgWidth;
  var yJ = window.innerHeight / imgHeight;
  var kJ = (1680/imgWidth)/(921/imgHeight);
  var kA = window.innerWidth / window.innerHeight;
  var kB  = imgWidth  / imgHeight;
  var yhJ = xJ / kJ * 1.02;
  var xwJ = yJ / kJ * 1.02;
  console.log (window.innerWidth, window.innerHeight)
  console.log (xJ, yhJ, xwJ, yJ);
  if (kA > kB) {
  document.getElementById("svg-wrapper").style.webkitTransform = "translate(0px, 0px) scale("+ xJ +", "+ yhJ +")"
  var valsnt = (imgWidth-360)/2;
  }
  else {
  document.getElementById("svg-wrapper").style.webkitTransform = "translate(0px, 0px) scale("+ xwJ +", "+ yJ +")"
  var perH = 720/window.innerHeight*window.innerWidth;
  var valsnt = (perH - 360)/2;
  //console.log(window.innerWidth, window.innerHeight, valsnt);
  }
}
resize();


// функция ресайза изображения при растягивании окна браузера
$(function(){
  $(window).resize(function() {
  var xj = window.innerWidth / imgWidth;
  var yj = window.innerHeight / imgHeight;
  var kj = (1680/imgWidth)/(921/imgHeight);
  var ka = window.innerWidth / window.innerHeight;
  var kb = imgWidth  / imgHeight;
  var yhj = xj / kj * 1.02;
  var xwj = yj / kj * 1.02;
  
  console.log (xj, yhj, xwj, yj);

  if (ka > kb) {
  document.getElementById("svg-wrapper").style.webkitTransform = "translate(0px, 0px) scale("+ xj +", "+ yhj +")";
  var valsnt = (imgWidth-360)/2;
  }
  else {
  document.getElementById("svg-wrapper").style.webkitTransform = "translate(0px, 0px) scale("+ xwj +", "+ yj +")";
  var perH = 720/window.innerHeight*window.innerWidth;
  var valsnt = (perH - 360)/2;
  console.log(window.innerWidth, window.innerHeight, valsnt);
  }
    })
})
</script>


 <!-- скрипт замены фона, при нажатии на этаж -->
        <script>
    function buttonFloor (floorId, floorButtonId) {
      $( '.floorgroup' ).removeClass('visible');
      $(floorId).removeClass('floorgroup').addClass('floorgroup visible');
      $( '.floor-num' ).removeClass('floor-active');
      $(floorButtonId).removeClass('floor-num').addClass('floor-num floor-active');
    }
    
      $('#fl042').on('click', function (){buttonFloor('#floor04_2', '#fl042')} );
            $('#fl041').on('click', function (){buttonFloor('#floor04_1', '#fl041')} );
            $('#fl032').on('click', function (){buttonFloor('#floor03_2', '#fl032')} );
            $('#fl031').on('click', function (){buttonFloor('#floor03_1', '#fl031')} );
            $('#fl022').on('click', function (){buttonFloor('#floor02_2', '#fl022')} );
            $('#fl021').on('click', function (){buttonFloor('#floor02_1', '#fl021')} );
            $('#fl012').on('click', function (){buttonFloor('#floor01_2', '#fl012')} );
        </script>
<!-- /скрипт замены фона, при нажатии на этаж -->


<!-- Изменяет стили у svg для cвободных, зарезервированых и купленых квартир -->
<script type="text/javascript">
var svgArr = $( "#svg-wrapper" ).find( ".status" );

for (var i = 0; i < svgArr.length; i++) {
  if (svgArr[i].textContent == "Свободна") {
    $( svgArr[i] ).parent().parent().parent().find('polygon').addClass("free");
  } else if (svgArr[i].textContent == "В резерве") {
    $( svgArr[i] ).parent().parent().parent().find('polygon').addClass("reserved");
  } else if (svgArr[i].textContent == "Куплена") {
    $( svgArr[i] ).parent().parent().parent().find('polygon').addClass("bought");
  } else {
    $( svgArr[i] ).parent().parent().parent().find('polygon').addClass("free");
  }
}
</script>


<!-- Скрипт загрузки и анимации блоков - детальное описание квартир -->
<script>
function animatedBlocks(blockId, urlContent){
	$( blockId ).addClass("left-block-show");
	$(".mask").toggleClass("mask-show");
	setTimeout (function(){
			$( blockId ).load( urlContent, function( response, status, xhr ) {
			  if ( status == "error" ) {
					$( blockId ).load("/omega/admin/apartments/error.php");
					console.log (response, status, xhr );
				  }
			});
	}, 0);
};

$('#svg-flat-01').click( function(){animatedBlocks("#block-fl01", "/omega/admin/apartments/flat_01.php")} );
$('#svg-flat-02').click( function(){animatedBlocks("#block-fl02", "/omega/admin/apartments/flat_02.php")} );


</script>

  
</div> <!--END pjax-global -->    
  


<?
require_once('../../footer.php');
?>