  var pathVidNight01;
  var pathVidNight02;
  var pathVidNight03;
  var pathVidNight04;
  var pathVidNight05;
  var pathVidNight06;
  var pathVidNight07;
  var pathVidNight08;
  var pathVidNight09;
  var pathVidNight10;
  var pathVidNight11;

  var pathVidDay01;
  var pathVidDay02;
  var pathVidDay03;
  var pathVidDay04;
  var pathVidDay05;
  var pathVidDay06;
  var pathVidDay07;
  var pathVidDay08;
  var pathVidDay09;
  var pathVidDay10;
  var pathVidDay11;

// video night mp4

function funcPathVidNightMp4() {  
  pathVidNight01 = '/omega/media/night/01.mp4';
  pathVidNight02 = '/omega/media/night/02.mp4';
  pathVidNight03 = '/omega/media/night/03.mp4';
  pathVidNight04 = '/omega/media/night/04.mp4';
  pathVidNight05 = '/omega/media/night/05.mp4';
  pathVidNight06 = '/omega/media/night/06.mp4';
  pathVidNight07 = '/omega/media/night/07.mp4';
  pathVidNight08 = '/omega/media/night/08.mp4';
  pathVidNight09 = '/omega/media/night/09.mp4';
  pathVidNight10 = '/omega/media/night/10.mp4';
  pathVidNight11 = '/omega/media/night/11.mp4';
}

  // video day mp4 

function funcPathVidDayMp4() {  
  pathVidDay01 = '/omega/media/day/01.mp4';
  pathVidDay02 = '/omega/media/day/02.mp4';
  pathVidDay03 = '/omega/media/day/03.mp4';
  pathVidDay04 = '/omega/media/day/04.mp4';
  pathVidDay05 = '/omega/media/day/05.mp4';
  pathVidDay06 = '/omega/media/day/06.mp4';
  pathVidDay07 = '/omega/media/day/07.mp4';
  pathVidDay08 = '/omega/media/day/08.mp4';
  pathVidDay09 = '/omega/media/day/09.mp4';
  pathVidDay10 = '/omega/media/day/10.mp4';
  pathVidDay11 = '/omega/media/day/11.mp4';
}

  // video night webm

function funcPathVidNightWebm() {  
  pathVidNight01 = '/omega/media/night/01.webm';
  pathVidNight02 = '/omega/media/night/02.webm';
  pathVidNight03 = '/omega/media/night/03.webm';
  pathVidNight04 = '/omega/media/night/04.webm';
  pathVidNight05 = '/omega/media/night/05.webm';
  pathVidNight06 = '/omega/media/night/06.webm';
  pathVidNight07 = '/omega/media/night/07.webm';
  pathVidNight08 = '/omega/media/night/08.webm';
  pathVidNight09 = '/omega/media/night/09.webm';
  pathVidNight10 = '/omega/media/night/10.webm';
  pathVidNight11 = '/omega/media/night/11.webm';
}

  // video day webm

function funcPathVidDayWebm() {  
    pathVidDay01 = '/omega/media/day/01.webm';
    pathVidDay02 = '/omega/media/day/02.webm';
    pathVidDay03 = '/omega/media/day/03.webm';
    pathVidDay04 = '/omega/media/day/04.webm';
    pathVidDay05 = '/omega/media/day/05.webm';
    pathVidDay06 = '/omega/media/day/06.webm';
    pathVidDay07 = '/omega/media/day/07.webm';
    pathVidDay08 = '/omega/media/day/08.webm';
    pathVidDay09 = '/omega/media/day/09.webm';
    pathVidDay10 = '/omega/media/day/10.webm';
    pathVidDay11 = '/omega/media/day/11.webm';
}


  // img night
  var pathImgNight01 = '/omega/images/night/01.jpg';
  var pathImgNight02 = '/omega/images/night/02.jpg';
  var pathImgNight03 = '/omega/images/night/03.jpg';
  var pathImgNight04 = '/omega/images/night/04.jpg';
  var pathImgNight05 = '/omega/images/night/05.jpg';
  var pathImgNight06 = '/omega/images/night/06.jpg';
  var pathImgNight07 = '/omega/images/night/07.jpg';
  var pathImgNight08 = '/omega/images/night/08.jpg';
  var pathImgNight09 = '/omega/images/night/09.jpg';
  var pathImgNight10 = '/omega/images/night/10.jpg';
  var pathImgNight11 = '/omega/images/night/11.jpg';

  // img day
  var pathImgDay01 = '/omega/images/day/01.jpg';
  var pathImgDay02 = '/omega/images/day/02.jpg';
  var pathImgDay03 = '/omega/images/day/03.jpg';
  var pathImgDay04 = '/omega/images/day/04.jpg';
  var pathImgDay05 = '/omega/images/day/05.jpg';  
  var pathImgDay06 = '/omega/images/day/06.jpg';
  var pathImgDay07 = '/omega/images/day/07.jpg';
  var pathImgDay08 = '/omega/images/day/08.jpg';
  var pathImgDay09 = '/omega/images/day/09.jpg';
  var pathImgDay10 = '/omega/images/day/10.jpg';
  var pathImgDay11 = '/omega/images/day/11.jpg';

  var pathIconDay = '/omega/images/icons/day.png';
  var pathIconNight = '/omega/images/icons/night.png';


 //записываем глобальные переменные ДЕНЬ
  var funcSessionStorageDay = function() {
    sessionStorage.clear();
    var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidDay01);
    var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgDay01);
    var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidDay02);
    var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgDay02);
    var linkBgvid03 = sessionStorage.setItem('linkBgvid03', pathVidDay03);
    var linkBgimg03 = sessionStorage.setItem('linkBgimg03', pathImgDay03);
    var linkBgvid04 = sessionStorage.setItem('linkBgvid04', pathVidDay04);
    var linkBgimg04 = sessionStorage.setItem('linkBgimg04', pathImgDay04);
    var linkBgvid05 = sessionStorage.setItem('linkBgvid05', pathVidDay05);
    var linkBgimg05 = sessionStorage.setItem('linkBgimg05', pathImgDay05);
    var linkBgvid06 = sessionStorage.setItem('linkBgvid06', pathVidDay06);
    var linkBgimg06 = sessionStorage.setItem('linkBgimg06', pathImgDay06);
    var linkBgvid07 = sessionStorage.setItem('linkBgvid07', pathVidDay07);
    var linkBgimg07 = sessionStorage.setItem('linkBgimg07', pathImgDay07);
    var linkBgvid08 = sessionStorage.setItem('linkBgvid08', pathVidDay08);
    var linkBgimg08 = sessionStorage.setItem('linkBgimg08', pathImgDay08);
    var linkBgvid09 = sessionStorage.setItem('linkBgvid09', pathVidDay09);
    var linkBgimg09 = sessionStorage.setItem('linkBgimg09', pathImgDay09);
    var linkBgvid10 = sessionStorage.setItem('linkBgvid10', pathVidDay10);
    var linkBgimg10 = sessionStorage.setItem('linkBgimg10', pathImgDay10);
    var linkBgvid11 = sessionStorage.setItem('linkBgvid11', pathVidDay11);
    var linkBgimg11 = sessionStorage.setItem('linkBgimg11', pathImgDay11);
  };

  //записываем глобальные переменные НОЧЬ
    var funcSessionStorageNight = function() {
      sessionStorage.clear();
      var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidNight01);
      var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgNight01);
      var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidNight02);
      var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgNight02);
      var linkBgvid03 = sessionStorage.setItem('linkBgvid03', pathVidNight03);
      var linkBgimg03 = sessionStorage.setItem('linkBgimg03', pathImgNight03);
      var linkBgvid04 = sessionStorage.setItem('linkBgvid04', pathVidNight04);
      var linkBgimg04 = sessionStorage.setItem('linkBgimg04', pathImgNight04);
      var linkBgvid05 = sessionStorage.setItem('linkBgvid05', pathVidNight05);
      var linkBgimg05 = sessionStorage.setItem('linkBgimg05', pathImgNight05);
      var linkBgvid06 = sessionStorage.setItem('linkBgvid06', pathVidNight06);
      var linkBgimg06 = sessionStorage.setItem('linkBgimg06', pathImgNight06);
      var linkBgvid07 = sessionStorage.setItem('linkBgvid07', pathVidNight07);
      var linkBgimg07 = sessionStorage.setItem('linkBgimg07', pathImgNight07);
      var linkBgvid08 = sessionStorage.setItem('linkBgvid08', pathVidNight08);
      var linkBgimg08 = sessionStorage.setItem('linkBgimg08', pathImgNight08);
      var linkBgvid09 = sessionStorage.setItem('linkBgvid09', pathVidNight09);
      var linkBgimg09 = sessionStorage.setItem('linkBgimg09', pathImgNight09);
      var linkBgvid10 = sessionStorage.setItem('linkBgvid10', pathVidNight10);
      var linkBgimg10 = sessionStorage.setItem('linkBgimg10', pathImgNight10);
      var linkBgvid11 = sessionStorage.setItem('linkBgvid11', pathVidNight11);
      var linkBgimg11 = sessionStorage.setItem('linkBgimg11', pathImgNight11);
  };