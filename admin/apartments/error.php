<button class="close-left-slide">&times;</button>
  <div class="block-info">
    Sorry but there was an error.
  </div> 

  <script type="text/javascript">
    
    // Закрываем выехавший блок
  $(".close-left-slide, .mask").click( function(){
        $(".left-block").removeClass("left-block-show");
        $(".mask").removeClass("mask-show");
      });
  </script>