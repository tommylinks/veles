
    <footer class="footer-bg">
      <div class="footer-info">
        <div class="left-footer-menu">
          <a href="#" class="footer-text">Видеоролик</a>
          <a href="#" class="icon-play"></a>
          <a href="#" class="footer-text">Вознесенский спуск 28-30</a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="facebook" href="#"></a></li>
            <li><a class="vk" href="#"></a></li>
            <li><a class="instagram" href="#"></a></li>
          </ul>
        </div>
        <div class="right-footer-menu">
          <a href="#" class="footer-text">+38 (777) 777-77-77</a>
          <a href="#" class="icon-eye"></a>
          <a href="#" class="footer-text">Виртуальный тур</a>
        </div>
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

  <!-- floating-menu tooltips-->
  <script type="text/javascript" src="js/floating-menu.js"></script>
  <script type="text/javascript">
    $.floatingMenu({
      selector: '.main-icon[data-action="show-actions-menu"]',
      items: [
        {
            icon : 'ion-social-youtube',
            title : 'Youtube',
            action : 'https://youtube.com/',
            blank : true, // open url in new tab (optional, defaults to false)
            close : false, // dont close the menu after and action has happened (optional, defaults to true)
        },
        {
            icon : 'ion-social-skype',
            title : 'google',
            action : 'https://google.com/',
            close : false, // no effect since there is a redirect (optional)
        },
        {
            icon : 'ion-social-tumblr',
            title : 'Insert',
            action : function(event) {
                alert('insert');
            },
            blank : true, // no effect since action is not a url (optional, defaults to false)
            close : false, // dont close the menu after and action has happened (optional, defaults to true)
        },
        {
            icon : 'ion-social-javascript',
            title : 'Edit',
            action : function(event) 
            {
                alert('edit');
            },
        },
        {
            icon : 'ion-social-chrome',
            title : 'Remove',
            action : function(event) {
                alert('remove');
            },
        },
        {
            icon : '',
            title : 'Подробнее...',
            action : function(event) {
                alert('remove');
            },
        },
      ]
    });

  </script>
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