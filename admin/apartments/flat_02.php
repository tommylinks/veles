<? include '../flat_info.php'; ?>
<button class="close-left-slide">&times;</button>
  <div class="block-info">
    <div class="col-wrap clearfix">
      <div class="col-logo col-block">
        <img src="/omega/images/icons/logo-black.png" alt="logo" class="slider-logo" >
      </div>
      <div class="col-sheme col-block">
        <img src="<? echo $flat_02["detail"]["plan"]; ?>" alt="sheme">
      </div>
      <div class="col-info col-block">
        <table class="table-flat-info">
          <tbody>
            <tr>
              <td>№ квартиры:</td>
              <td><? echo $flat_02["detail"]["features"]["flat_number"]; ?></td>
            </tr>
            <tr>
              <td>№ секции:</td>
              <td><? echo $flat_02["detail"]["features"]["section_number"]; ?></td>
            </tr>
            <tr>
              <td>К-во уровней:</td>
              <td><? echo $flat_02["detail"]["features"]["levels_quantity"]; ?></td>
            </tr>
            <tr>
              <td>Фактический этаж:</td>
              <td><? echo $flat_02["detail"]["features"]["floor"]; ?></td>
            </tr>
            <tr>
              <td>К-во комнат в базовой планировке:</td>
              <td><? echo $flat_02["detail"]["features"]["rooms_quantity"]; ?></td>
            </tr>
            <tr>
              <td>К-во сансузлов:</td>
              <td><? echo $flat_02["detail"]["features"]["bathroom_quantity"]; ?></td>
            </tr>
            <tr>
              <td>Площадь квартиры:</td>
              <td>1 уровень: <? echo $flat_02["detail"]["features"]["flat_area"]["level_one"]; ?> м2</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>2 уровень: <? echo $flat_02["detail"]["features"]["flat_area"]["level_two"]; ?> м2</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>итоговая: <? echo $flat_02["detail"]["features"]["flat_area"]["summary"]; ?> м2</td>
            </tr>
            <tr>
              <td>Цена за 1м2:</td>
              <td>
                $<? echo $flat_02["detail"]["features"]["price_meter"]; ?>
                <span class="i-icon tooltip-i" data-tooltip-content="#tooltip_i_icon"></span>
              </td>
            </tr>
            <tr>
              <td>Итоговая цена:</td>
              <td>
                $<? echo $flat_02["detail"]["features"]["price_summary"]; ?>
                <span class="i-icon tooltip-i" data-tooltip-content="#tooltip_i_icon"></span>
              </td>
            </tr>
          </tbody>
        </table>

      </div><!--col-info  -->
    </div>

    <div class="col-title">
      <h3>
      План квартиры:<br>
      Вариант 1
      </h3>
      <hr>
    </div>




  <!-- carousel -->
    <div id="myCarousel02" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel02" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel02" data-slide-to="1"></li>
      <li data-target="#myCarousel02" data-slide-to="2"></li>
      <li data-target="#myCarousel02" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<? echo $flat_02["detail"]["slider"]["slide_01"]; ?>" />
      </div>

      <div class="item">
        <img src="<? echo $flat_02["detail"]["slider"]["slide_02"]; ?>" />
      </div>

      <div class="item">
        <img src="<? echo $flat_02["detail"]["slider"]["slide_03"]; ?>" />
      </div>

      <div class="item">
        <img src="<? echo $flat_02["detail"]["slider"]["slide_04"]; ?>" />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel02" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel02" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--END carousel -->

  <button class="btn-about-flat">Узнать по этой квартире</button>


  </div> 

  <script type="text/javascript">
    
    // Закрываем выехавший блок
  $(".close-left-slide, .mask").click( function(){
        $(".left-block").removeClass("left-block-show");
        $(".mask").removeClass("mask-show");
      });
  </script>