
    <footer class="footer-bg">
      <div class="footer-info">
        <h2>#FOOTER</h2>
      </div>
    </footer>

    <!-- overlay -->
    <div class="overlay"></div>

    <!-- main menu -->
    <div class="main-menu">
      <ul>
        <li><a href="<?php echo $template_path; ?>">Главная</a></li>
        <li><a href="<?php echo $template_path; ?>about/">О комплексе</a></li>
        <li><a href="">Расположение</a></li>
        <li><a href="">Ход строительства</a></li>
        <li><a href="">Купить</a></li>
        <li><a href="">Документы</a></li>
        <li><a href="">События</a></li>
      </ul>
      <span class="close-main-menu">  &times;</span>
    </div>
  </div><!--END wrapper -->

  <!-- show main-menu -->
  <script>
    $(".main-menu-btn").click( function () {
      $(".footer-bg").css('background','transparent');
      $(".main-icons-kit").fadeOut(500);
      $(".main-menu, .overlay").fadeIn(500);
      $(".main-menu").animate({
        opacity: 1,
        left: "0",
      }, 500, function() {
        // Animation complete.
      });
    });

    $(".close-main-menu, .overlay").click( function () {
      $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500, function() {
        // Animation complete.
      });
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icons-kit").fadeIn(1000);
    });
  </script>
</body>
</html>