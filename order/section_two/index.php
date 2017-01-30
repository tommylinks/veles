<?php 

// meta tags
$title = "Section two"; ///---
$description = "DESCRIPTION";
$manifest = "order.manifest";

require_once('../../header.php');
include '../../admin/flat_info.php';
header('Content-type: application/xhtml+xml');
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

  .carousel-inner img {max-height: 435px;}


  svg:hover + .flat-info > .flat-desc {
    display: block; 
  }

  svg:hover + .flat-info {height: 50px; 
  }

 /* svg {
    width: 1920px;
    height: 1080px;
  }*/

  #tooltip_i_icon {
    max-width: 215px;
    display: inline-block;
    height: auto;
    text-align: center;
    font-size: 12px;
    white-space: normal;
    padding: 8px 0;
  }

  .tooltipster-base {pointer-events: auto;}

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
    cursor: pointer;
 }

  
.close-left-slide {
    position: absolute;
    width: 60px;
    height: 60px;
    z-index: 6;
    background: none;
    color: #fff;
    border: none;
    font-size: 80px;
    top: 5px;
    line-height: 70px;
    right: -75px;
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

  <img id="bgimg" class="img-bg" src="" style = "">
    <img id="bgimg-back" class="img-bg" src="" style = "opacity: 1;">

  <div id="bgvid-wrapper" style ="position: absolute; ">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>


    <header>
      <span class="bgvid-link-01">
        <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 0;">
      </span>
      <button class="main-menu-btn secondary-p menu-buy-p hvr-grow" style="opacity: 0;">Меню</button>
      
      <!-- START svg-wrapper -->
<div id="svg-wrapper"> 

  <div class="hide-bug-svg"></div>

<!-- floor 01 -->
  <div id="floor01" class="floorgroup">

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-66" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-66">
              <div>66</div>
              <div class="flat-desc">
                  <div><? echo $flat_66["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_66["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-67" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-67">
              <div>67</div>
              <div class="flat-desc">
                  <div><? echo $flat_67["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_67["brief"]["status"];?></div>
              </div>
          </div>
      </div>
      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-68" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-68">
              <div>68</div>
              <div class="flat-desc">
                  <div><? echo $flat_68["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_68["brief"]["status"];?></div>
              </div>
          </div>
      </div>
      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-69" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-69">
              <div>69</div>
              <div class="flat-desc">
                  <div><? echo $flat_69["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_69["brief"]["status"];?></div>
              </div>
          </div>
      </div>
      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-70" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-70">
              <div>70</div>
              <div class="flat-desc">
                  <div><? echo $flat_70["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_70["brief"]["status"];?></div>
              </div>
          </div>
      </div>
      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-71" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-71">
              <div>71</div>
              <div class="flat-desc">
                  <div><? echo $flat_71["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_71["brief"]["status"];?></div>
              </div>
          </div>
      </div>
      <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
        <polygon id="svg-flat-72" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
      </svg>   
      <div class="flat-info flat-72">
        <div>72</div>
        <div class="flat-desc">
          <div><? echo $flat_72["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_72["brief"]["status"];?></div>
        </div>
      </div>
  </div> 
   <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-73" class="fil0 str0" points="354,645 411,596 420,601 425,597 430,601 577,665 587,722 585,725 585,732 536,779 531,777 528,779 520,732 517,722 368,653 366,650 " />
      </svg>
      <div class="flat-info flat-73">
        <div>73</div>
        <div class="flat-desc">
          <div><? echo $flat_73["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_73["brief"]["status"];?></div>
        </div>
      </div>
    </div>  
   
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-74" class="fil0 str0" points="507,517 518,522 522,519 523,520 523,521 668,581 671,578 688,584 689,585 691,610 691,614 684,621 685,632 685,636 641,678 639,679 634,677 623,689 622,688 614,633 466,570 465,566 463,565 460,567 459,567 458,561 459,559 459,558 459,557 459,557 461,556 "/>
      </svg>
      <div class="flat-info flat-74">
        <div>74</div>
        <div class="flat-desc">
          <div><? echo $flat_74["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_74["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-75" class="fil0 str0" points="684,620 691,614 688,586 688,585 667,576 527,518 527,517 526,516 526,516 522,519 521,519 521,518 520,512 520,511 520,510 521,509 522,506 519,505 514,503 522,496 534,485 545,476 562,462 569,464 581,469 581,472 587,475 602,481 665,505 725,529 725,532 731,534 732,535 734,561 734,563 731,565 731,566 734,567 734,567 735,581 736,585 735,587 734,588 726,596 693,628 692,629 691,628 690,628 685,625 "/>
      </svg>
      <div class="flat-info flat-75">
        <div>75</div>
        <div class="flat-desc">
          <div><? echo $flat_75["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_75["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-76" class="fil0 str0" points="612,420 613,419 615,419 617,420 630,425 635,424 637,426 795,487 786,495 861,525 862,556 848,571 845,570 760,537 761,568 742,586 741,587 736,585 734,567 734,567 731,566 731,565 734,563 734,561 732,535 731,534 727,533 727,526 585,469 585,467 565,459 "/>
      </svg>
      <div class="flat-info flat-76">
        <div>76</div>
        <div class="flat-desc">
          <div><? echo $flat_76["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_76["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-77" class="fil0 str0" points="673,377 675,376 676,376 679,377 686,379 687,379 689,381 827,432 830,429 840,433 841,436 842,469 902,491 902,515 879,538 878,508 803,479 799,483 641,423 639,421 638,421 634,424 633,410 "/>
      </svg>
      <div class="flat-info flat-77">
        <div>77</div>
        <div class="flat-desc">
          <div><? echo $flat_77["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_77["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-78" class="fil0 str0" points="723,330 725,328 727,329 739,333 740,339 877,388 877,389 889,392 890,393 891,395 891,397 892,421 891,423 888,426 886,428 886,442 848,479 843,476 841,436 840,433 830,429 692,378 691,376 687,379 686,379 680,377 679,365 680,363 681,363 683,363 "/>
      </svg>
      <div class="flat-info flat-78">
        <div>78</div>
        <div class="flat-desc">
          <div><? echo $flat_78["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_78["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-79" class="fil0 str0" points="766,292 768,290 770,291 784,295 785,298 786,297 787,298 923,345 923,347 924,350 926,351 927,353 928,378 925,381 927,382 928,399 927,400 927,403 893,435 891,436 888,435 886,434 886,428 891,423 892,421 891,397 891,395 890,393 889,392 877,389 877,388 879,385 742,337 742,332 727,327 766,294 "/>
      </svg>
      <div class="flat-info flat-79">
        <div>79</div>
        <div class="flat-desc">
          <div><? echo $flat_79["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_79["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl01.jpg" />
    </div>
    
<!-- floor 02 -->
  <div id="floor02" class="floorgroup">

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-80" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-80">
              <div>80</div>
              <div class="flat-desc">
                  <div><? echo $flat_80["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_80["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-81" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-81">
              <div>81</div>
              <div class="flat-desc">
                  <div><? echo $flat_81["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_81["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-82" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-82">
              <div>82</div>
              <div class="flat-desc">
                  <div><? echo $flat_82["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_82["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-83" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-83">
              <div>83</div>
              <div class="flat-desc">
                  <div><? echo $flat_83["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_83["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-84" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-84">
              <div>84</div>
              <div class="flat-desc">
                  <div><? echo $flat_84["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_84["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-85" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-85">
              <div>85</div>
              <div class="flat-desc">
                  <div><? echo $flat_85["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_85["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
        <polygon id="svg-flat-86" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
      </svg>   
      <div class="flat-info flat-86">
        <div>86</div>
        <div class="flat-desc">
          <div><? echo $flat_86["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_86["brief"]["status"];?></div>
        </div>
      </div>
  </div> 
   <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-87" class="fil0 str0" points="354,645 411,596 420,601 425,597 430,601 577,665 587,722 585,725 585,732 536,779 531,777 528,779 520,732 517,722 368,653 366,650 " />
      </svg>
      <div class="flat-info flat-87">
        <div>87</div>
        <div class="flat-desc">
          <div><? echo $flat_87["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_87["brief"]["status"];?></div>
        </div>
      </div>
    </div>  
   
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-88" class="fil0 str0" points="507,517 518,522 522,519 523,520 523,521 668,581 671,578 688,584 689,585 691,610 691,614 684,621 685,632 685,636 641,678 639,679 634,677 623,689 622,688 614,633 466,570 465,566 463,565 460,567 459,567 458,561 459,559 459,558 459,557 459,557 461,556 "/>
      </svg>
      <div class="flat-info flat-88">
        <div>88</div>
        <div class="flat-desc">
          <div><? echo $flat_88["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_88["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-89" class="fil0 str0" points="684,620 691,614 688,586 688,585 667,576 527,518 527,517 526,516 526,516 522,519 521,519 521,518 520,512 520,511 520,510 521,509 522,506 519,505 514,503 522,496 534,485 545,476 562,462 569,464 581,469 581,472 587,475 602,481 665,505 725,529 725,532 731,534 732,535 734,561 734,563 731,565 731,566 734,567 734,567 735,581 736,585 735,587 734,588 726,596 693,628 692,629 691,628 690,628 685,625 "/>
      </svg>
      <div class="flat-info flat-89">
        <div>89</div>
        <div class="flat-desc">
          <div><? echo $flat_89["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_89["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-90" class="fil0 str0" points="612,420 613,419 615,419 617,420 630,425 635,424 637,426 795,487 786,495 861,525 862,556 848,571 845,570 760,537 761,568 742,586 741,587 736,585 734,567 734,567 731,566 731,565 734,563 734,561 732,535 731,534 727,533 727,526 585,469 585,467 565,459 "/>
      </svg>
      <div class="flat-info flat-90">
        <div>90</div>
        <div class="flat-desc">
          <div><? echo $flat_90["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_90["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-91" class="fil0 str0" points="673,377 675,376 676,376 679,377 686,379 687,379 689,381 827,432 830,429 840,433 841,436 842,469 902,491 902,515 879,538 878,508 803,479 799,483 641,423 639,421 638,421 634,424 633,410 "/>
      </svg>
      <div class="flat-info flat-91">
        <div>91</div>
        <div class="flat-desc">
          <div><? echo $flat_91["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_91["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-92" class="fil0 str0" points="723,330 725,328 727,329 739,333 740,339 877,388 877,389 889,392 890,393 891,395 891,397 892,421 891,423 888,426 886,428 886,442 848,479 843,476 841,436 840,433 830,429 692,378 691,376 687,379 686,379 680,377 679,365 680,363 681,363 683,363 "/>
      </svg>
      <div class="flat-info flat-92">
        <div>92</div>
        <div class="flat-desc">
          <div><? echo $flat_92["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_92["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-93" class="fil0 str0" points="766,292 768,290 770,291 784,295 785,298 786,297 787,298 923,345 923,347 924,350 926,351 927,353 928,378 925,381 927,382 928,399 927,400 927,403 893,435 891,436 888,435 886,434 886,428 891,423 892,421 891,397 891,395 890,393 889,392 877,389 877,388 879,385 742,337 742,332 727,327 766,294 "/>
      </svg>
      <div class="flat-info flat-93">
        <div>93</div>
        <div class="flat-desc">
          <div><? echo $flat_93["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_93["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl02.jpg" />
    </div>


    
<!-- floor 03 -->
  <div id= "floor03" class="floorgroup">

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-94" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-94">
              <div>94</div>
              <div class="flat-desc">
                  <div><? echo $flat_94["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_94["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-95" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-95">
              <div>95</div>
              <div class="flat-desc">
                  <div><? echo $flat_95["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_95["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-96" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-96">
              <div>96</div>
              <div class="flat-desc">
                  <div><? echo $flat_96["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_96["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-97" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-97">
              <div>97</div>
              <div class="flat-desc">
                  <div><? echo $flat_97["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_97["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-98" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-98">
              <div>98</div>
              <div class="flat-desc">
                  <div><? echo $flat_98["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_98["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
          <polygon id="svg-flat-99" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
          </svg>
          <div class="flat-info flat-99">
              <div>99</div>
              <div class="flat-desc">
                  <div><? echo $flat_99["brief"]["area"];?> m²</div>
                  <div class="status"><? echo $flat_99["brief"]["status"];?></div>
              </div>
          </div>
      </div>

      <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1"">
        <polygon id="svg-flat-100" class="fil0 str0" points="292,697 351,647 362,653 364,656 515,726 515,730 520,733 525,761 523,764 523,765 525,766 529,784 528,787 475,837 470,834 466,838 461,835 450,785 298,713 297,709 293,713 291,704 " />
      </svg>   
      <div class="flat-info flat-100">
        <div>100</div>
        <div class="flat-desc">
          <div><? echo $flat_100["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_100["brief"]["status"];?></div>
        </div>
      </div>
  </div> 
   <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-101" class="fil0 str0" points="354,645 411,596 420,601 425,597 430,601 577,665 587,722 585,725 585,732 536,779 531,777 528,779 520,732 517,722 368,653 366,650 " />
      </svg>
      <div class="flat-info flat-101">
        <div>101</div>
        <div class="flat-desc">
          <div><? echo $flat_101["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_101["brief"]["status"];?></div>
        </div>
      </div>
    </div>  
   
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-102" class="fil0 str0" points="507,517 518,522 522,519 523,520 523,521 668,581 671,578 688,584 689,585 691,610 691,614 684,621 685,632 685,636 641,678 639,679 634,677 623,689 622,688 614,633 466,570 465,566 463,565 460,567 459,567 458,561 459,559 459,558 459,557 459,557 461,556 "/>
      </svg>
      <div class="flat-info flat-102">
        <div>102</div>
        <div class="flat-desc">
          <div><? echo $flat_102["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_102["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-103" class="fil0 str0" points="684,620 691,614 688,586 688,585 667,576 527,518 527,517 526,516 526,516 522,519 521,519 521,518 520,512 520,511 520,510 521,509 522,506 519,505 514,503 522,496 534,485 545,476 562,462 569,464 581,469 581,472 587,475 602,481 665,505 725,529 725,532 731,534 732,535 734,561 734,563 731,565 731,566 734,567 734,567 735,581 736,585 735,587 734,588 726,596 693,628 692,629 691,628 690,628 685,625 "/>
      </svg>
      <div class="flat-info flat-103">
        <div>103</div>
        <div class="flat-desc">
          <div><? echo $flat_103["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_103["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-104" class="fil0 str0" points="612,420 613,419 615,419 617,420 630,425 635,424 637,426 795,487 786,495 861,525 862,556 848,571 845,570 760,537 761,568 742,586 741,587 736,585 734,567 734,567 731,566 731,565 734,563 734,561 732,535 731,534 727,533 727,526 585,469 585,467 565,459 "/>
      </svg>
      <div class="flat-info flat-104">
        <div>104</div>
        <div class="flat-desc">
          <div><? echo $flat_104["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_104["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-105" class="fil0 str0" points="673,377 675,376 676,376 679,377 686,379 687,379 689,381 827,432 830,429 840,433 841,436 842,469 902,491 902,515 879,538 878,508 803,479 799,483 641,423 639,421 638,421 634,424 633,410 "/>
      </svg>
      <div class="flat-info flat-105">
        <div>105</div>
        <div class="flat-desc">
          <div><? echo $flat_105["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_105["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-106" class="fil0 str0" points="723,330 725,328 727,329 739,333 740,339 877,388 877,389 889,392 890,393 891,395 891,397 892,421 891,423 888,426 886,428 886,442 848,479 843,476 841,436 840,433 830,429 692,378 691,376 687,379 686,379 680,377 679,365 680,363 681,363 683,363 "/>
      </svg>
      <div class="flat-info flat-106">
        <div>106</div>
        <div class="flat-desc">
          <div><? echo $flat_106["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_106["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
         <polygon id="svg-flat-107" class="fil0 str0" points="766,292 768,290 770,291 784,295 785,298 786,297 787,298 923,345 923,347 924,350 926,351 927,353 928,378 925,381 927,382 928,399 927,400 927,403 893,435 891,436 888,435 886,434 886,428 891,423 892,421 891,397 891,395 890,393 889,392 877,389 877,388 879,385 742,337 742,332 727,327 766,294 "/>
      </svg>
      <div class="flat-info flat-107">
        <div>107</div>
        <div class="flat-desc">
          <div><? echo $flat_107["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_107["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl03.jpg" />
    </div>
    

<!-- floor 04 -->
    <div id= "floor04" class="floorgroup">

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-108" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
        </svg>
        <div class="flat-info flat-108">
            <div>108</div>
            <div class="flat-desc">
                <div><? echo $flat_108["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_108["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-109" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
        </svg>
        <div class="flat-info flat-109">
            <div>109</div>
            <div class="flat-desc">
                <div><? echo $flat_109["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_109["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-110" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
        </svg>
        <div class="flat-info flat-110">
            <div>110</div>
            <div class="flat-desc">
                <div><? echo $flat_110["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_110["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-111" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
        </svg>
        <div class="flat-info flat-111">
            <div>111</div>
            <div class="flat-desc">
                <div><? echo $flat_111["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_111["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-112" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
        </svg>
        <div class="flat-info flat-112">
            <div>112</div>
            <div class="flat-desc">
                <div><? echo $flat_112["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_112["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-113" class="fil0 str0" points="265,682 279,686 284,681 284,680 443,754 449,785 400,830 399,829 234,779 231,782 218,737 "/>
      </svg>
      <div class="flat-info flat-113">
        <div>113</div>
        <div class="flat-desc">
          <div><? echo $flat_113["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_113["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-114" class="fil0 str0" points="349,618 507,689 510,703 514,704 515,709 519,732 465,784 460,784 452,779 447,783 440,747 290,676 293,673 281,668 283,665 288,666 345,618 "/>
      </svg>
      <div class="flat-info flat-114">
        <div>114</div>
        <div class="flat-desc">
          <div><? echo $flat_114["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_114["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-115" class="fil0 str0" points="402,571 403,567 406,564 418,569 421,565 479,590 572,629 575,632 580,665 578,667 579,676 578,678 527,725 518,723 515,707 513,704 509,685 366,620 359,617 356,618 349,614 "/>
      </svg>
      <div class="flat-info flat-115">
        <div>115</div>
        <div class="flat-desc">
          <div><? echo $flat_115["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_115["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-116" class="fil0 str0" points="518,487 667,546 668,549 684,556 686,557 687,559 690,584 641,630 624,622 619,626 616,597 613,595 610,597 460,534 463,532 452,527 455,525 458,525 500,491 500,488 502,486 515,490 "/>
      </svg>
      <div class="flat-info flat-116">
        <div>116</div>
        <div class="flat-desc">
          <div><? echo $flat_116["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_116["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
       <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-117" class="fil0 str0" points="561,431 721,494 723,504 728,506 729,507 730,509 732,524 732,533 689,575 687,559 686,557 684,556 668,550 667,542 521,484 525,480 508,474 511,471 513,472 "/>
      </svg>
      <div class="flat-info flat-117">
        <div>117</div>
        <div class="flat-desc">
          <div><? echo $flat_117["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_117["brief"]["status"];?></div>
        </div>
      </div> 
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-118" class="fil0 str0" points="611,387 629,394 632,391 778,446 768,455 867,494 868,524 846,545 756,510 739,526 737,526 734,525 732,524 730,509 729,507 728,506 723,504 721,490 579,434 577,435 563,430 609,392 609,389 "/>
      </svg>
      <div class="flat-info flat-118">
        <div>118</div>
        <div class="flat-desc">
          <div><? echo $flat_118["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_118["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-119" class="fil0 str0" points="672,346 682,350 686,347 827,398 829,396 837,399 840,402 841,431 905,454 905,457 902,460 903,483 905,484 905,487 890,502 888,473 789,436 780,445 779,442 637,389 640,386 630,382 633,379 635,380 643,373 642,372 663,355 665,355 671,351 670,348 "/>
      </svg>
      <div class="flat-info flat-119">
        <div>119</div>
        <div class="flat-desc">
          <div><? echo $flat_119["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_119["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>   
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-120" class="fil0 str0" points="723,298 737,302 736,304 875,353 875,360 876,361 888,365 890,366 891,368 892,370 893,390 890,395 853,429 850,429 841,426 840,402 837,399 829,396 829,395 690,344 693,341 676,335 678,333 681,334 "/>
      </svg>
      <div class="flat-info flat-120">
        <div>120</div>
        <div class="flat-desc">
          <div><? echo $flat_120["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_120["brief"]["status"];?></div>
        </div>
      </div>
    </div>

     <div>   
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-121" class="fil0 str0" points="766,261 783,266 785,265 922,311 923,323 926,324 927,326 927,330 927,349 927,351 926,353 892,384 892,370 891,368 890,366 888,365 877,362 877,351 875,350 725,297 764,266 764,262 "/>
      </svg>
      <div class="flat-info flat-121">
        <div>121</div>
        <div class="flat-desc">
          <div><? echo $flat_121["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_121["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl04.jpg" />
    </div>
    
<!-- floor 05 -->
    <div id="floor05" class="floorgroup" >

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-122" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
        </svg>
        <div class="flat-info flat-122">
            <div>122</div>
            <div class="flat-desc">
                <div><? echo $flat_122["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_122["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-123" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
        </svg>
        <div class="flat-info flat-123">
            <div>123</div>
            <div class="flat-desc">
                <div><? echo $flat_123["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_123["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-124" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
        </svg>
        <div class="flat-info flat-124">
            <div>124</div>
            <div class="flat-desc">
                <div><? echo $flat_124["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_124["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-125" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
        </svg>
        <div class="flat-info flat-125">
            <div>125</div>
            <div class="flat-desc">
                <div><? echo $flat_125["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_125["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-126" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
        </svg>
        <div class="flat-info flat-126">
            <div>126</div>
            <div class="flat-desc">
                <div><? echo $flat_126["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_126["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-127" class="fil0 str0" points="251,609 268,617 270,624 428,697 439,753 394,793 228,746 231,744 219,740 214,723 213,722 212,718 193,709 180,663 183,660 187,661 "/>
      </svg>
      <div class="flat-info flat-127">
        <div>127</div>
        <div class="flat-desc">
          <div><? echo $flat_127["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_127["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-128" class="fil0 str0" points="314,560 314,558 316,555 335,563 340,559 343,561 344,567 498,634 500,641 514,647 518,670 518,672 517,674 510,680 512,694 512,696 510,698 460,745 458,746 455,746 451,743 443,750 432,693 274,621 272,623 270,615 253,608 "/>
      </svg>
      <div class="flat-info flat-128">
        <div>128</div>
        <div class="flat-desc">
          <div><? echo $flat_128["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_128["brief"]["status"];?></div>
        </div>
      </div>
    </div>
  
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-129" class="fil0 str0" points="394,502 405,508 409,505 411,507 411,511 565,575 573,631 572,632 573,636 573,639 573,640 572,642 523,686 521,688 519,688 517,688 511,684 510,680 517,674 518,672 518,670 514,647 505,643 503,631 349,564 347,556 346,554 341,558 340,551 342,548 339,546 "/>
      </svg> 
      <div class="flat-info flat-129">
        <div>129</div>
        <div class="flat-desc">
          <div><? echo $flat_129["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_129["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-130" class="fil0 str0" points="493,424 503,429 506,426 510,429 510,433 658,491 661,490 663,491 662,491 672,495 672,497 675,518 674,520 671,524 674,525 675,527 676,544 676,545 674,548 630,588 627,589 625,588 621,586 613,593 610,595 609,594 608,593 602,543 450,480 449,473 452,470 442,465 444,462 446,463 490,428 489,427 "/>
      </svg>  
      <div class="flat-info flat-130">
        <div>130</div>
        <div class="flat-desc">
          <div><? echo $flat_130["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_130["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-131" class="fil0 str0" points="549,374 569,382 567,384 718,441 718,445 723,447 725,448 725,450 727,471 725,474 724,476 726,477 727,478 728,493 728,497 726,500 685,538 684,539 683,540 681,539 676,536 675,527 674,525 671,524 674,520 675,518 672,497 672,495 662,491 663,491 662,490 663,489 513,430 513,423 512,422 503,429 501,428 499,421 499,417 500,414 502,411 "/>
      </svg>  
      <div class="flat-info flat-131">
        <div>131</div>
        <div class="flat-desc">
          <div><? echo $flat_131["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_131["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>    
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-132" class="fil0 str0" points="602,332 606,334 611,330 626,336 627,338 789,397 780,405 857,434 859,470 844,484 753,450 754,474 729,497 728,497 727,478 726,477 724,476 725,474 727,471 725,450 725,448 723,447 721,446 720,438 550,373 "/>
      </svg>  
      <div class="flat-info flat-132">
        <div>132</div>
        <div class="flat-desc">
          <div><? echo $flat_132["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_132["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>     
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-133" class="fil0 str0" points="667,287 676,291 675,292 678,294 681,292 681,295 824,346 827,343 837,347 838,348 839,376 900,398 900,423 904,424 904,427 876,453 875,417 798,389 791,395 631,337 630,328 625,332 624,324 625,322 624,321 "/>
      </svg>  
      <div class="flat-info flat-133">
        <div>133</div>
        <div class="flat-desc">
          <div><? echo $flat_133["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_133["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>     
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-134" class="fil0 str0" points="719,245 729,249 731,248 732,254 874,301 875,303 881,306 883,307 883,330 883,332 880,335 883,336 883,340 883,354 883,356 881,358 848,390 845,391 843,391 839,389 836,391 832,389 830,391 828,345 827,343 684,293 683,285 679,289 679,282 681,279 678,278 "/>
      </svg>  
      <div class="flat-info flat-134">
        <div>134</div>
        <div class="flat-desc">
          <div><? echo $flat_134["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_134["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>    
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-135" class="fil0 str0" points="770,205 780,208 780,215 782,214 921,260 921,266 926,267 927,293 923,297 925,298 926,316 925,318 924,319 893,347 890,349 888,350 885,349 883,347 883,336 880,335 883,332 883,330 883,307 881,306 878,305 877,299 736,251 735,244 731,247 731,241 733,239 731,237 731,236 "/>
      </svg>  
      <div class="flat-info flat-135">
        <div>135</div>
        <div class="flat-desc">
          <div><? echo $flat_135["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_135["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl05.jpg" />
    </div>
    
<!-- floor 06 -->    
    <div id="floor06" class="floorgroup" >


    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-136" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
        </svg>
        <div class="flat-info flat-136">
            <div>136</div>
            <div class="flat-desc">
                <div><? echo $flat_136["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_136["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-137" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
        </svg>
        <div class="flat-info flat-137">
            <div>137</div>
            <div class="flat-desc">
                <div><? echo $flat_137["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_137["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-138" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
        </svg>
        <div class="flat-info flat-138">
            <div>138</div>
            <div class="flat-desc">
                <div><? echo $flat_138["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_138["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-139" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
        </svg>
        <div class="flat-info flat-139">
            <div>139</div>
            <div class="flat-desc">
                <div><? echo $flat_139["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_139["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-140" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
        </svg>
        <div class="flat-info flat-140">
            <div>140</div>
            <div class="flat-desc">
                <div><? echo $flat_140["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_140["brief"]["status"];?></div>
            </div>
        </div>
    </div>
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-141" class="fil0 str0" points="240,560 242,567 257,574 260,585 261,584 420,655 428,693 382,734 380,733 378,735 204,686 184,677 168,620 169,616 172,613 "/>
      </svg>  
      <div class="flat-info flat-141">
        <div>141</div>
        <div class="flat-desc">
          <div><? echo $flat_141["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_141["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>   
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-142" class="fil0 str0" points="303,512 306,512 323,520 330,514 333,527 335,525 492,593 495,607 505,611 507,613 512,640 511,643 509,645 507,647 458,691 456,692 454,693 452,693 449,692 437,686 436,686 432,689 424,652 264,580 262,582 259,572 244,566 243,559 " />
      </svg>  
      <div class="flat-info flat-142">
        <div>142</div>
        <div class="flat-desc">
          <div><? echo $flat_142["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_142["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"  version="1.1">
        <polygon id="svg-flat-143" class="fil0 str0" points="384,458 397,465 402,462 404,470 560,534 566,583 510,633 507,614 505,611 496,607 493,590 339,522 337,509 332,513 330,501 "/>
      </svg>
      <div class="flat-info flat-143">
        <div>143</div>
        <div class="flat-desc">
          <div><? echo $flat_143["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_143["brief"]["status"];?></div>
        </div>
      </div> 
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-144" class="fil0 str0" points="484,381 496,386 502,381 504,393 655,452 656,456 666,460 668,461 670,463 672,484 672,486 671,489 670,490 624,532 622,532 620,532 612,529 603,537 598,502 443,441 441,428 439,427 443,425 435,422 434,421 "/>
      </svg>  
      <div class="flat-info flat-144">
        <div>144</div>
        <div class="flat-desc">
          <div><? echo $flat_144["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_144["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-145" class="fil0 str0" points="552,328 564,334 565,344 564,345 565,346 713,400 714,402 715,410 722,414 723,416 725,439 725,442 723,444 679,483 677,484 675,483 671,482 670,463 668,461 660,457 659,449 508,391 506,377 501,382 500,376 499,373 500,370 502,367 "/>
      </svg>  
      <div class="flat-info flat-145">
        <div>145</div>
        <div class="flat-desc">
          <div><? echo $flat_145["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_145["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-146" class="fil0 str0" points="554,327 605,288 617,293 621,290 622,300 770,352 770,355 758,367 858,404 860,438 843,454 842,454 750,419 749,421 731,437 727,437 725,435 723,416 722,414 717,411 715,397 566,342 565,333 554,328 "/>
      </svg>  
      <div class="flat-info flat-146">
        <div>146</div>
        <div class="flat-desc">
          <div><? echo $flat_146["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_146["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"  version="1.1">
        <polygon id="svg-flat-147" class="fil0 str0" points="662,245 672,250 678,244 679,257 825,308 833,310 836,312 837,337 837,338 902,362 903,365 902,366 902,393 904,393 904,396 888,412 886,377 886,376 786,342 773,353 773,350 626,299 624,286 614,281 "/>
      </svg> 
      <div class="flat-info flat-147">
        <div>147</div>
        <div class="flat-desc">
          <div><? echo $flat_147["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_147["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-148" class="fil0 str0" points="677,232 714,204 716,204 726,208 730,205 730,207 730,216 873,264 874,270 875,271 880,273 882,274 882,276 883,299 883,301 882,304 845,336 843,338 841,338 837,337 836,319 836,313 835,311 833,310 825,308 826,304 681,254 680,243 679,243 675,246 675,238 675,235 676,234 "/>
      </svg>  
      <div class="flat-info flat-148">
        <div>148</div>
        <div class="flat-desc">
          <div><? echo $flat_148["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_148["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"  version="1.1">
        <polygon id="svg-flat-149" class="fil0 str0" points="726,195 765,165 775,169 780,165 780,176 921,222 921,234 926,237 926,264 887,299 883,297 882,275 875,271 875,262 733,214 732,202 727,206 "/>
      </svg> 
      <div class="flat-info flat-149">
        <div>149</div>
        <div class="flat-desc">
          <div><? echo $flat_149["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_149["brief"]["status"];?></div>
        </div>
      </div>
    </div>

      <img src="img/fl06.jpg" />
    </div>
  
  <!-- floor 07 -->  
    <div id="floor07" class="floorgroup" >

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-150" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
        </svg>
        <div class="flat-info flat-150">
            <div>150</div>
            <div class="flat-desc">
                <div><? echo $flat_150["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_150["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-151" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
        </svg>
        <div class="flat-info flat-151">
            <div>151</div>
            <div class="flat-desc">
                <div><? echo $flat_151["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_151["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-152" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
        </svg>
        <div class="flat-info flat-152">
            <div>152</div>
            <div class="flat-desc">
                <div><? echo $flat_152["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_152["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-153" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
        </svg>
        <div class="flat-info flat-153">
            <div>153</div>
            <div class="flat-desc">
                <div><? echo $flat_153["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_153["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-154" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
        </svg>
        <div class="flat-info flat-154">
            <div>154</div>
            <div class="flat-desc">
                <div><? echo $flat_154["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_154["brief"]["status"];?></div>
            </div>
        </div>
    </div>
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-155" class="fil0 str0" points="229,506 249,515 244,519 245,524 408,595 421,660 374,699 213,656 189,649 174,642 168,618 170,613 154,562 "/>
      </svg>  
      <div class="flat-info flat-155">
        <div>155</div>
        <div class="flat-desc">
          <div><? echo $flat_155["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_155["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-156" class="fil0 str0" points="321,463 322,467 482,533 482,536 487,538 493,571 492,573 493,577 494,578 495,588 496,595 496,599 495,603 442,648 440,649 438,649 437,649 433,647 425,654 412,592 251,521 249,515 229,506 291,459 292,458 294,458 296,458 317,467 "/>
      </svg>  
      <div class="flat-info flat-156">
        <div>156</div>
        <div class="flat-desc">
          <div><? echo $flat_156["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_156["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-157" class="fil0 str0" points="393,412 551,475 561,541 559,543 559,545 557,547 508,591 506,592 504,593 503,592 495,588 494,578 493,577 492,573 493,571 485,529 327,464 325,457 320,460 318,448 322,446 324,447 374,409 372,408 376,406 386,410 392,406 "/>
      </svg>  
      <div class="flat-info flat-157">
        <div>157</div>
        <div class="flat-desc">
          <div><? echo $flat_157["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_157["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-158" class="fil0 str0" points="474,323 494,331 495,336 647,393 648,389 650,390 651,388 668,394 669,395 670,396 672,428 665,435 666,442 667,448 665,454 618,495 611,492 597,504 590,444 432,383 431,375 426,379 425,375 425,371 427,370 418,366 "/>
      </svg>  
      <div class="flat-info flat-158">
        <div>158</div>
        <div class="flat-desc">
          <div><? echo $flat_158["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_158["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-159" class="fil0 str0" points="534,280 554,288 557,286 557,288 713,345 715,345 717,346 717,350 719,378 716,381 716,382 718,383 719,384 720,397 720,402 720,404 719,406 676,445 675,445 673,445 671,445 666,442 665,435 669,431 672,428 672,425 670,396 669,395 668,394 651,388 650,390 499,333 498,328 478,321 531,280 532,280 "/>
      </svg>  
      <div class="flat-info flat-159">
        <div>159</div>
        <div class="flat-desc">
          <div><? echo $flat_159["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_159["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-160" class="fil0 str0" points="599,238 600,237 602,237 613,242 616,241 616,244 784,302 777,308 854,334 855,335 856,336 857,374 840,390 746,356 748,380 748,382 746,385 730,398 728,400 720,397 719,384 718,383 716,382 716,381 719,378 717,350 717,346 715,345 713,345 712,341 561,286 561,279 555,283 554,278 554,273 556,271 "/>
      </svg>  
      <div class="flat-info flat-160">
        <div>160</div>
        <div class="flat-desc">
          <div><? echo $flat_160["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_160["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-161" class="fil0 str0" points="658,190 673,195 673,201 818,249 820,247 822,246 831,249 832,250 833,251 834,282 897,304 898,328 902,330 902,333 872,359 871,322 792,295 788,299 620,242 620,235 618,235 611,241 607,239 605,226 606,225 610,225 "/>
      </svg>  
      <div class="flat-info flat-161">
        <div>161</div>
        <div class="flat-desc">
          <div><? echo $flat_161["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_161["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-162" class="fil0 str0" points="705,152 721,158 724,156 725,156 726,161 872,208 873,206 880,209 880,211 881,237 880,241 878,243 878,244 879,245 880,246 880,258 881,259 882,263 881,265 879,267 844,299 842,301 840,301 836,299 836,298 835,297 833,256 833,251 832,250 831,249 822,246 820,247 677,200 676,199 675,194 660,188 703,156 703,153 "/>
      </svg>  
      <div class="flat-info flat-162">
        <div>162</div>
        <div class="flat-desc">
          <div><? echo $flat_162["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_162["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <polygon id="svg-flat-163" class="fil0 str0" points="763,116 765,116 767,116 772,118 773,119 774,121 776,120 777,122 919,167 920,170 929,173 931,174 932,175 932,177 932,201 932,204 930,206 924,212 924,226 923,228 921,230 888,260 886,260 884,259 881,259 880,258 880,246 879,245 878,244 878,243 880,241 881,237 880,211 880,209 873,206 873,205 729,159 729,153 728,153 724,156 724,149 724,146 726,144 "/>
      </svg>  
      <div class="flat-info flat-163">
        <div>163</div>
        <div class="flat-desc">
          <div><? echo $flat_163["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_163["brief"]["status"];?></div>
        </div>
      </div>
    </div>
     
      <img src="img/fl07.jpg" />
    </div>

<!-- floor 08 -->    
    <div id="floor08" class="floorgroup" >
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-164" class="fil0 str0" d="M1217 327l5 2 0 1 66 22 1 -1 3 1 -7 8 0 8 -56 64 -82 -29 56 -62 0 -7 2 -2 4 1 7 -8zm-42 97l12 4 0 11 -11 -4 0 -10zm-1 21l10 4 0 3 -10 -4 0 -3z"/>
      </svg>  
      <div class="flat-info flat-164">
        <div>164</div>
        <div class="flat-desc">
          <div><? echo $flat_164["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_164["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-165" class="fil0 str0" d="M1300 356l6 2 68 24 2 -1 4 1 -5 8 0 8 -54 67 -86 -30 54 -64 0 -7 5 1 6 -7zm-25 103l11 3 0 10 -11 -3 0 -10z"/>
      </svg>  
      <div class="flat-info flat-165">
        <div>165</div>
        <div class="flat-desc">
          <div><? echo $flat_165["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_165["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">

          <path id="svg-flat-166" class="fil0 str0" d="M1387 384l5 2 0 2 70 23 2 -1 4 2 -6 8 2 1 0 7 -51 69 -89 -31 54 -68 0 -6 4 0 5 -7zm-34 102l12 4 0 11 -12 -4 0 -11z"/>
      </svg>  
      <div class="flat-info flat-166">
        <div>166</div>
        <div class="flat-desc">
          <div><? echo $flat_166["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_166["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-167" class="fil0 str1" d="M1467 428l1 -6 2 0 7 -9 5 2 0 1 55 18 20 7 3 -1 4 2 -5 8 3 1 0 6 -3 2 -47 70 -93 -33 50 -67zm-10 116l4 1 0 3 -4 -1 0 -3zm3 -22l13 4 0 11 -13 -4 0 -11z"/>
      </svg>
      <div class="flat-info flat-167">
        <div>167</div>
        <div class="flat-desc">
          <div><? echo $flat_167["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_167["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-168" class="fil0 str0" d="M1576 441l5 1 1 2 85 26 -57 91 -97 -33 52 -76 3 1 9 -13zm-30 111l13 4 -1 11 -13 -4 0 -12z"/>
      </svg>
      <div class="flat-info flat-168">
        <div>168</div>
        <div class="flat-desc">
          <div><? echo $flat_168["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_168["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">

          <path id="svg-flat-169" class="fil0 str0" d="M1669 473l85 28 1 -1 6 2 -7 13 11 4 -44 83 -107 -37 55 -92zm-15 141l11 4 0 3 -11 -4 0 -3zm5 -22l13 4 -1 11 -13 -4 1 -11z"/>
      </svg>
      <div class="flat-info flat-169">
        <div>169</div>
        <div class="flat-desc">
          <div><? echo $flat_169["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_169["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">

          <polygon id="svg-flat-170" class="fil0 str0" points="1499,550 1649,601 1594,692 1598,693 1590,728 1582,726 1577,734 1488,700 1486,701 1481,700 1482,690 1477,689 1470,697 1426,681 1430,645 1437,636 1442,637 "/>
      </svg>  
      <div class="flat-info flat-170">
        <div>170</div>
        <div class="flat-desc">
          <div><? echo $flat_170["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_170["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-171" class="fil0 str0" points="1356,500 1496,549 1437,636 1442,637 1435,674 1429,682 1382,665 1382,653 1378,652 1370,660 1285,627 1288,580 1293,581 "/>
      </svg>
      <div class="flat-info flat-171">
        <div>171</div>
        <div class="flat-desc">
          <div><? echo $flat_171["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_171["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon id="svg-flat-172" class="fil0 str0" points="1219,452 1352,499 1288,580 1293,581 1289,618 1284,616 1270,632 1266,631 1267,629 1132,579 1133,546 1146,530 1150,530 "/>
      </svg>  
      <div class="flat-info flat-172">
        <div>172</div>
        <div class="flat-desc">
          <div><? echo $flat_172["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_172["brief"]["status"];?></div>
        </div>
      </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-173" class="fil0 str0" points="1087,407 1213,452 1146,530 1150,530 1148,566 1136,581 1099,566 1098,568 1095,568 1095,566 1095,550 1090,550 1021,523 1019,524 1015,522 1015,513 1012,512 1013,480 1017,481 "/>
        </svg>
        <div class="flat-info flat-173">
            <div>173</div>
            <div class="flat-desc">
                <div><? echo $flat_173["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_173["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-174" class="fil0 str0" points="963,364 1084,406 1013,480 1017,481 1018,514 1013,513 1004,521 928,493 927,482 918,491 878,475 877,441 886,433 889,434 "/>
        </svg>
        <div class="flat-info flat-174">
            <div>174</div>
            <div class="flat-desc">
                <div><? echo $flat_174["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_174["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <polygon id="svg-flat-175"  class="fil0 str0" points="852,316 900,332 893,339 959,362 886,433 889,434 890,468 881,477 878,475 763,433 761,402 765,398 765,389 768,390 "/>
        </svg>
        <div class="flat-info flat-175">
            <div>175</div>
            <div class="flat-desc">
                <div><? echo $flat_175["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_175["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <path id="svg-flat-176" class="fil0 str0" d="M935 239l116 37 -74 70 -66 -23 -9 7 -48 -16 72 -64 -1 -5 4 0 6 -7zm4 104l10 3 0 9 -10 -4 0 -9z"/>
        </svg>
        <div class="flat-info flat-176">
            <div>176</div>
            <div class="flat-desc">
                <div><? echo $flat_176["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_176["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">

            <path id="svg-flat-177" class="fil0 str0" d="M1053 276l67 23 -1 2 -1 0 0 2 2 2 0 2 -1 1 0 5 -61 61 -79 -27 73 -70zm-35 94l10 3 0 10 -10 -3 0 -10z"/>
        </svg>
        <div class="flat-info flat-177">
            <div>177</div>
            <div class="flat-desc">
                <div><? echo $flat_177["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_177["brief"]["status"];?></div>
            </div>
        </div>
    </div>


      <img src="img/fl08.jpg" />
    </div>

<!-- floor 09 -->    
    <div id="floor09" class="floorgroup visible" >

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-178" class="fil0 str0" d="M1207 305l6 1 9 -9 72 24 1 3 -7 6 1 0 -56 64 -84 -28 58 -62zm-30 104l10 4 0 4 -10 -4 0 -4zm0 -21l12 4 0 10 -12 -4 0 -10z"/>
            
        </svg>
        <div class="flat-info flat-178">
            <div>178</div>
            <div class="flat-desc">
                <div><? echo $flat_178["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_178["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            
            <path id="svg-flat-179" class="fil0 str0" d="M1293 333l0 -3 6 2 6 -6 77 24 1 3 -4 6 -54 67 -87 -29 55 -63zm-15 88l12 4 0 10 -12 -4 0 -10z"/>
        </svg>
        <div class="flat-info flat-179">
            <div>179</div>
            <div class="flat-desc">
                <div><? echo $flat_179["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_179["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
           
            <path id="svg-flat-180" class="fil0 str0" d="M1383 359l4 1 6 -6 76 24 2 2 0 7 -52 71 -91 -30 55 -68zm-24 90l12 4 0 10 -12 -4 0 -10z"/>
        </svg>
        <div class="flat-info flat-180">
            <div>180</div>
            <div class="flat-desc">
                <div><? echo $flat_180["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_180["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path id="svg-flat-181" class="fil0 str0" d="M1474 389l4 0 5 -7 82 26 2 4 -4 5 3 1 0 2 -3 1 -47 69 -94 -32 51 -69zm-11 117l5 2 0 3 -5 -2 0 -3zm3 -21l13 4 -1 10 -12 -4 1 -10z"/>
            
        </svg>
        <div class="flat-info flat-181">
            <div>181</div>
            <div class="flat-desc">
                <div><? echo $flat_181["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_181["brief"]["status"];?></div>
            </div>
        </div>
    </div>


    <div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            
            <path id="svg-flat-182" class="fil0 str0" d="M1570 419l6 3 8 -12 87 28 -54 86 -98 -32 50 -72zm-21 116l4 2 0 4 -4 -1 0 -4zm17 -17l-2 10 -14 -4 2 -10 14 4z"/>
        </svg>
        <div class="flat-info flat-182">
            <div>182</div>
            <div class="flat-desc">
                <div><? echo $flat_182["brief"]["area"];?> m²</div>
                <div class="status"><? echo $flat_182["brief"]["status"];?></div>
            </div>
        </div>
    </div>

    <div>       
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <path id="svg-flat-183" class="fil0 str0" d="M1676 438l89 29 2 3 0 4 -4 8 9 3 -43 76 -108 -36 55 -88zm-13 137l12 4 -1 4 -11 -3 0 -4zm6 -22l13 5 -2 11 -14 -5 2 -11z"/>
       
      </svg>  
      <div class="flat-info flat-183">
        <div>183</div>
        <div class="flat-desc">
          <div><? echo $flat_183["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_183["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <polygon id="svg-flat-184" class="fil0 str0" points="1507,512 1657,563 1604,653 1607,655 1599,692 1591,689 1585,698 1580,697 1580,692 1495,662 1493,664 1488,663 1489,652 1486,651 1480,659 1430,641 1435,608 1443,598 1448,599 "/>
        
      </svg>  
      <div class="flat-info flat-184">
        <div>184</div>
        <div class="flat-desc">
          <div><? echo $flat_184["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_184["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <polygon id="svg-flat-185" class="fil0 str0" points="1359,462 1503,510 1445,596 1448,599 1442,635 1438,633 1431,644 1386,627 1388,615 1385,614 1378,623 1373,621 1289,589 1292,542 1298,543 "/>
        
      </svg>  
      <div class="flat-info flat-185">
        <div>185</div>
        <div class="flat-desc">
          <div><? echo $flat_185["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_185["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <polygon id="svg-flat-186" class="fil0 str0" points="1221,415 1356,461 1292,542 1298,543 1294,579 1286,577 1279,588 1138,536 1140,502 1148,492 1153,493 "/>
        
      </svg>  
      <div class="flat-info flat-186">
        <div>186</div>
        <div class="flat-desc">
          <div><? echo $flat_186["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_186["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <polygon id="svg-flat-187" class="fil0 str0" points="1088,370 1217,414 1148,492 1153,493 1151,528 1142,538 1102,522 1102,513 1096,518 1021,491 1021,492 1015,490 1015,478 1012,477 1013,442 1018,443 "/>
        
      </svg>  
      <div class="flat-info flat-187">
        <div>187</div>
        <div class="flat-desc">
          <div><? echo $flat_187["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_187["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      
      <polygon id="svg-flat-188" class="fil0 str0" points="963,327 1085,369 1013,442 1018,443 1017,478 1012,477 1005,486 927,457 927,448 917,456 873,441 873,407 884,396 888,397 "/>
      </svg>  
      <div class="flat-info flat-188">
        <div>188</div>
        <div class="flat-desc">
          <div><? echo $flat_188["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_188["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      
      <polygon id="svg-flat-189" class="fil0 str0" points="852,279 899,296 892,303 960,326 884,396 888,397 888,432 877,443 760,399 758,367 762,363 762,352 766,353 "/>  
      </svg>  
      <div class="flat-info flat-189">
        <div>189</div>
        <div class="flat-desc">
          <div><? echo $flat_189["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_189["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <path id="svg-flat-190" class="fil0 str0" d="M853 278l72 -63 6 1 6 -6 109 34 -70 66 -67 -22 -9 7 -48 -16zm85 29l10 3 0 10 -10 -3 0 -9z"/>
        
      </svg>  
      <div class="flat-info flat-190">
        <div>190</div>
        <div class="flat-desc">
          <div><? echo $flat_190["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_190["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
    <div> 
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
       <path id="svg-flat-191" class="fil0 str0" d="M1050 245l70 22 2 3 -6 5 4 1 -61 61 -79 -27 69 -66zm-32 89l11 3 0 9 -11 -3 0 -9z"/>
      </svg>  
      <div class="flat-info flat-191">
        <div>191</div>
        <div class="flat-desc">
          <div><? echo $flat_191["brief"]["area"];?> m²</div>
          <div class="status"><? echo $flat_191["brief"]["status"];?></div>
        </div>
      </div>
    </div>
    
      <img src="img/fl09.jpg" />
    </div> 
    
       
        
</div> <!-- END svg-wrapper -->
    
    
    <!-- START floor buttons  -->  
    <div class="buy-sections section-two" style="opacity: 0;">

    <div class="section-title">
      <h1>Секция 2</h1>
      <a href="/omega/order/section_one/">Секция 1</a>
    </div>

      <table class="buy-table">
        <tbody>
        <tr>
          <td></td>
          <td class="buy-table-title">Этаж</td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td></td>
          <td><span id="fl09" class="floor-num floor-active">09</span></td>
          <td class="buy-table-title text-right">Жилая недвижимость</td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl08" class="floor-num">08</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl07" class="floor-num">07</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl06" class="floor-num">06</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl05" class="floor-num">05</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl04" class="floor-num">04</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl03" class="floor-num">03</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl02" class="floor-num">02</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span id="fl01" class="floor-num">01</span></td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
            <td class="text-right">антрисоль</td>
            <td><span class="floor-num">01</span></td>
            <td class="buy-table-title text-right">Коммерческая недвижимость</td>
        </tr>
        <tr>
            <td class="text-right">бытовые<br> помещения<br></td>
            <td><span class="floor-num">-1</span></td>
            <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td></td>
          <td><span class="floor-num">P-1</span></td>
          <td class="buy-table-title text-right">Паркинг</td>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- END floor buttons  -->  

      <button class="sound-btn secondary-p hvr-grow hide-main-icon-left" style="opacity: 0"></button>
      <div class="icon-phone secondary-p">
        <div class="icon-phone-animation"></div>
      </div>
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

   <!-- main menu -->
  <div class="main-menu">

    <? include '../../include/menu.php'; ?>

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
    width: 1255px;
    -webkit-transition: transform 1s;
     -moz-transition: transform 1s;
     -o-transition: transform 1s;
     transition: transform 1s;
  }


  .left-block-show{transform: translateX(0%); width: 1255px; background: #fff;}

  .table-flat-info td {
    padding: 0 5px;
    font-size: 14px;
    color: #6d6d6d;
  }

  .table-flat-info td:first-child {
  font-weight: bold;
  }

  .col-title {
    position: relative;
    margin: 65px 0 30px 0;
  }

  .col-title h3 {
    position: absolute;
    background: #fff;
    left: 0;
    top: -47px;
    font-size: 14px;
    font-weight: normal;
    line-height: 18px;
  }

  .carousel-inner img{margin: 0 auto;}


  .carousel-control.right {
    background: url(../../images/arrows/slider-right.png) no-repeat;
    background-position: 50%;
  }

  .carousel-control {width: 50px;}


.carousel-control.left {
    background: url(../../images/arrows/slider-left.png) no-repeat;
    background-position: left 50%;
  }

.carousel-indicators {
    bottom: -50px;
}

.btn-about-flat {
  display: block;
  margin: 50px auto;
  font-size: 16px;
  text-align: center;
  border: none;
  outline: none;
  background: #fad258;
  padding: 23px 71px;
  font-weight: 700;
  color: #000;
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



<!-- popup wrapper -->


    <? include '../../include/callback_popup.php'; ?>


<!--END popup wrapper -->

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
    
            $('#fl09').on('click', function (){buttonFloor('#floor09', '#fl09')} );
            $('#fl08').on('click', function (){buttonFloor('#floor08', '#fl08')} );
            $('#fl07').on('click', function (){buttonFloor('#floor07', '#fl07')} );
            $('#fl06').on('click', function (){buttonFloor('#floor06', '#fl06')} );
            $('#fl05').on('click', function (){buttonFloor('#floor05', '#fl05')} );
            $('#fl04').on('click', function (){buttonFloor('#floor04', '#fl04')} );
            $('#fl03').on('click', function (){buttonFloor('#floor03', '#fl03')} );
            $('#fl02').on('click', function (){buttonFloor('#floor02', '#fl02')} );
            $('#fl01').on('click', function (){buttonFloor('#floor01', '#fl01')} );
        </script>
<!-- /скрипт замены фона, при нажатии на этаж -->


<!-- Изменяет стили у svg для cвободных, зарезервированых и купленых квартир -->
<script type="text/javascript">
var svgArr = $( "#svg-wrapper" ).find( ".status" );

for (var i = 0; i < svgArr.length; i++) {
  if (svgArr[i].textContent == "Свободна") {
    $( svgArr[i] ).parent().parent().parent().find('.fil0').addClass("free");
  } else if (svgArr[i].textContent == "В резерве") {
    $( svgArr[i] ).parent().parent().parent().find('.fil0').addClass("reserved");
  } else if (svgArr[i].textContent == "Куплена") {
    $( svgArr[i] ).parent().parent().parent().find('.fil0').addClass("bought");
  } else {
    $( svgArr[i] ).parent().parent().parent().find('.fil0').addClass("free");
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

<!-- init music -->
  <script type="text/javascript">
    playMusic();
  </script>
  <!--END init music -->


  
</div> <!--END pjax-global -->    
  


<?
require_once('../../footer.php');
?>