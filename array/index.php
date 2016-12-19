<?php
$file = 'windowview.manifest';
$current = file_get_contents($file);
file_put_contents($file, $current, LOCK_EX);
?>

<html  manifest="windowview.manifest">



<script type="text/javascript" src="jquery.min.js"></script>



 <style type="text/css">

  body {
      overflow: hidden;
      padding: 0;
      margin: 0;
      min-height: 100vh;
  }
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
  }
  #floor {
      position: absolute;
      right: 40px;
      top: 50%;
      color: white;
      font-size: 33px;
  }
  #top {
      position: absolute;
      right: 40px;
      top: 45%;
      cursor: pointer;
      width: 10px;
      height: 10px;
	  padding: 20px;
      border-radius: 50%;
      background: red;
	  z-index: 101;
  }
  #bottom {
      position: absolute;
      right: 40px;
      top: 55%;
      cursor: pointer;
      width: 10px;
      height: 10px;
	  padding: 20px;
      border-radius: 50%;
      background: blue;
	  z-index: 102;
  }
 </style>

 <body>

  <div id="bgmask" style = "cursor: move; position: absolute; width: 100%; top: 5%; height: 95%;  margin: 0; z-index: 0; padding: 0;"></div>


 <img id="bg-img-anim" src="00.jpg" />
  <div>
	  <div id ="top"></div>
	  <div id ="bottom"></div>
  </div>
  <div id = "floor">0</div>

 </body>






 <script>
    var urls = '00.jpg, 01.jpg, 02.jpg, 03.jpg, 04.jpg, 05.jpg, 06.jpg, 07.jpg, 08.jpg, 09.jpg, 10.jpg, 11.jpg, 12.jpg, 13.jpg, 14.jpg, 15.jpg, 16.jpg, 17.jpg, 18.jpg, 19.jpg, 20.jpg, 21.jpg, 22.jpg, 23.jpg, 24.jpg, 25.jpg, 26.jpg, 27.jpg, 28.jpg, 29.jpg';
    
    var arr = urls.split(', ');

    var arrayImg = sessionStorage.getItem('arrayImg');
    var numFloor = sessionStorage.getItem('numFloor');
    var numIndex = sessionStorage.getItem('numIndex');



	// check
	if (sessionStorage.getItem('arrayImg') === 'null' || !sessionStorage.getItem('arrayImg')) {
		sessionStorage.setItem('arrayImg', '00.jpg');
		arrayImg = sessionStorage.getItem('arrayImg');
		}
	if (sessionStorage.getItem('numFloor') === 'null' || !sessionStorage.getItem('numFloor')) {
		sessionStorage.setItem('numFloor', 1);
		numFloor = +sessionStorage.getItem('numFloor');
		}
	if (sessionStorage.getItem('numIndex') === 'null' || !sessionStorage.getItem('numIndex')) {
		sessionStorage.setItem('numIndex', 0);
		numIndex = +sessionStorage.getItem('numIndex');
		}
		
    $('#bg-img-anim').attr('src', arrayImg);
    floor.innerHTML = numFloor;

        var screenHeight = screen.height;
        var stepFloor = screen.height / arr.length * 0.9;
        var a = Math.round(0 + stepFloor);
        var b = Math.round(a + stepFloor);
        var c = Math.round(b + stepFloor);
        var d = Math.round(c + stepFloor);
        var e = Math.round(d + stepFloor);
        var f = Math.round(e + stepFloor);
        var g = Math.round(f + stepFloor);
        var h = Math.round(g + stepFloor);
        var i = Math.round(h + stepFloor);
        var j = Math.round(i + stepFloor);
        var k = Math.round(j + stepFloor);
        var l = Math.round(k + stepFloor);
        var m = Math.round(l + stepFloor);
        var n = Math.round(m + stepFloor);
        var o = Math.round(n + stepFloor);
        var p = Math.round(o + stepFloor);
        var q = Math.round(p + stepFloor);
        var r = Math.round(q + stepFloor);
        var s = Math.round(r + stepFloor);
        var t = Math.round(s + stepFloor);
        var v = Math.round(t + stepFloor);
        var w = Math.round(v + stepFloor);
        var x = Math.round(w + stepFloor);
        var y = Math.round(x + stepFloor);
        var z = Math.round(y + stepFloor);
        var za = Math.round(z + stepFloor);
        var zb = Math.round(za + stepFloor);
        var zc = Math.round(zb + stepFloor);
        var zd = Math.round(zc + stepFloor);
        var ze = Math.round(zd + stepFloor);
  
    
    // mouse
function position () {
    document.onmousemove = handleMouseMove;
    function handleMouseMove(event) {
        var dot, eventDoc, doc, body, pageX, pageY;

        event = event || window.event; // IE-ism

        // If pageX/Y aren't available and clientX/Y are,
        // calculate pageX/Y - logic taken from jQuery.
        // (This is to support old IE)
        if (event.pageX == null && event.clientX != null) {
            eventDoc = (event.target && event.target.ownerDocument) || document;
            doc = eventDoc.documentElement;
            body = eventDoc.body;
            event.pageY = event.clientY +
              (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
              (doc && doc.clientTop  || body && body.clientTop  || 0 );
        }

        

        // Use event.pageX / event.pageY here
         
        var time = 1000;
        if (event.pageY == 0 || event.pageY == a || event.pageY < a && event.pageY > 0 || event.pageY < 0) {
          
          setTimeout(function(){
            arrayImg = arr[0];
            numIndex = 0;
            numFloor = floor.innerHTML = '1';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 5);

        } else if (event.pageY == b || event.pageY < b && event.pageY > a ) { 
          
          setTimeout(function(){
            arrayImg = arr[1];
            numIndex = 1;
            numFloor = floor.innerHTML = '1';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 10);

        } else if (event.pageY == c || event.pageY < c && event.pageY > b ) { 
         
          setTimeout(function(){
            arrayImg = arr[2];
            numIndex = 2;
            numFloor = floor.innerHTML = '1';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 15);

        } else if (event.pageY == d || event.pageY < d && event.pageY > c ) { 
          
          setTimeout(function(){
            arrayImg = arr[3];
            numIndex = 3;
            numFloor = floor.innerHTML = '2';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 20);

    } else if (event.pageY == e || event.pageY < e && event.pageY > d ) { 
          
          setTimeout(function(){
            arrayImg = arr[4];
            numIndex = 4;
            numFloor = floor.innerHTML = '2';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 25);

        } else if (event.pageY == f || event.pageY < f && event.pageY > e) { 
          
          setTimeout(function(){
            arrayImg = arr[5];
            numIndex = 5;
            numFloor = floor.innerHTML = '2';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 30);

        } else if (event.pageY == g || event.pageY < g && event.pageY > f) { 
          
          setTimeout(function(){
            arrayImg = arr[6];
            numIndex = 6;
            numFloor = floor.innerHTML = '3';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 35);

        } else if (event.pageY == h || event.pageY < h && event.pageY > g) { 
          
          setTimeout(function(){
            arrayImg = arr[7];
            numIndex = 7;
            numFloor = floor.innerHTML = '3';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 40);

        } else if (event.pageY == i || event.pageY < i && event.pageY > h) { 
          
          setTimeout(function(){
            arrayImg = arr[8];
            numIndex = 8;
            numFloor = floor.innerHTML = '3';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 45);

        } else if (event.pageY == j || event.pageY < j && event.pageY > i) { 
         
          setTimeout(function(){
            arrayImg = arr[9];
            numIndex = 9;
            numFloor = floor.innerHTML = '4';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 50);

        } else if (event.pageY == k || event.pageY < k && event.pageY > j) { 
          
          setTimeout(function(){
            arrayImg = arr[10];
            numIndex = 10;
            numFloor = floor.innerHTML = '4';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 55);

        } else if (event.pageY == l || event.pageY < l && event.pageY > k) { 
          
          setTimeout(function(){
            arrayImg = arr[11];
            numIndex = 11;
            numFloor = floor.innerHTML = '4';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 60);

        } else if (event.pageY == j || event.pageY < j && event.pageY > l) { 
          
          setTimeout(function(){
            arrayImg = arr[12];
            numIndex = 12;
            numFloor = floor.innerHTML = '5';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 65);

        } else if (event.pageY == n || event.pageY < n && event.pageY > m) { 
          
          setTimeout(function(){
            arrayImg = arr[13];
            numIndex = 13;
            numFloor = floor.innerHTML = '5';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 70);

        } else if (event.pageY == o || event.pageY < o && event.pageY > n) { 
          
          setTimeout(function(){
            arrayImg = arr[14];
            numIndex = 14;
            numFloor = floor.innerHTML = '5';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 75);   

        } else if (event.pageY == p || event.pageY < p && event.pageY > o) { 
          
          setTimeout(function(){
            arrayImg = arr[15];
            numIndex = 15;
            numFloor = floor.innerHTML = '6';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 80);

        } else if (event.pageY == q || event.pageY < q && event.pageY > p) { 
          
          setTimeout(function(){
            arrayImg = arr[16];
            numIndex = 16;
            numFloor = floor.innerHTML = '6';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 85);

        } else if (event.pageY == r || event.pageY < r && event.pageY > q) { 
          
          setTimeout(function(){
            arrayImg = arr[17];
            numIndex = 17;
            numFloor = floor.innerHTML = '6';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 90);

        } else if (event.pageY == s || event.pageY < s && event.pageY > r) { 
          
          setTimeout(function(){
            arrayImg = arr[18];
            numIndex = 18;
            numFloor = floor.innerHTML = '7';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 95);

        } else if (event.pageY == t || event.pageY < t && event.pageY > s) { 
          
          setTimeout(function(){
            arrayImg = arr[19];
            numIndex = 19;
            numFloor = floor.innerHTML = '7';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 100);
    
        } else if (event.pageY == v || event.pageY < v && event.pageY > t) { 
          
          setTimeout(function(){
            arrayImg = arr[20];
            numIndex = 20;
            numFloor = floor.innerHTML = '7';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 105);
    
        } else if (event.pageY == w || event.pageY < w && event.pageY > v) { 
          
          setTimeout(function(){
            arrayImg = arr[21];
            numIndex = 21;
            numFloor = floor.innerHTML = '8';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 110);
    
        } else if (event.pageY == x || event.pageY < x && event.pageY > w) { 
          
          setTimeout(function(){
            arrayImg = arr[22];
            numIndex = 22;
            numFloor = floor.innerHTML = '8';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 115);
    
        } else if (event.pageY == y || event.pageY < y && event.pageY > x) { 
          
          setTimeout(function(){
            arrayImg = arr[23];
            numIndex = 23;
            numFloor = floor.innerHTML = '8';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 120);
     
        } else if (event.pageY == z || event.pageY < z && event.pageY > y) { 
          
          setTimeout(function(){
            arrayImg = arr[24];
            numIndex = 24;
            numFloor = floor.innerHTML = '9';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 125);
      
        } else if (event.pageY == za || event.pageY < za && event.pageY > z) { 
          
          setTimeout(function(){
            arrayImg = arr[25];
            numIndex = 25;
            numFloor = floor.innerHTML = '9';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 130);
      
        } else if (event.pageY == zb || event.pageY < zb && event.pageY > za) { 
          
          setTimeout(function(){
            arrayImg = arr[26];
            numIndex = 26;
            numFloor = floor.innerHTML = '9';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 135);
      
        } else if (event.pageY == zc || event.pageY < zc && event.pageY > zb) { 
          
          setTimeout(function(){
            arrayImg = arr[27];
            numIndex = 27;
            numFloor = floor.innerHTML = '10';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 140);
      
        } else if (event.pageY == zd || event.pageY < zd && event.pageY > zc) { 
          
          setTimeout(function(){
            arrayImg = arr[28];
            numIndex = 28;
            numFloor = floor.innerHTML = '10';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 145);
           
        } else if (event.pageY == ze || event.pageY < ze && event.pageY > zd || event.pageY > screenHeight) { 
          
          setTimeout(function(){
            arrayImg = arr[29];
            numIndex = 29;
            numFloor = floor.innerHTML = '10';
            $('#bg-img-anim').attr('src', arrayImg)
          }, 150);
           
        } 
    
  sessionStorage.clear();
  sessionStorage.setItem('numFloor', numFloor);     
  sessionStorage.setItem('numIndex', numIndex);
  sessionStorage.setItem('arrayImg', arrayImg);


    }
};




//buttons

$('#top').on('click', function(){

numFloor = +sessionStorage.getItem('numFloor');     
numIndex = +sessionStorage.getItem('numIndex');
arrayImg = sessionStorage.getItem('arrayImg');
console.log(numIndex, numFloor, arrayImg);

if (numIndex == 0) { 
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[0])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[1])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[2])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 45);
 floor.innerHTML = 2;
 sessionStorage.setItem('numFloor', 2);     
 sessionStorage.setItem('numIndex', 3);
 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 1) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[1])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[2])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 35);
				 floor.innerHTML = 2;
				 sessionStorage.setItem('numFloor', 2);     
				 sessionStorage.setItem('numIndex', 3);
				 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 2) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[2])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 25);
				 floor.innerHTML = 2;
				 sessionStorage.setItem('numFloor', 2);     
				 sessionStorage.setItem('numIndex', 3);
				 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 3) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[4])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[5])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 45);
 floor.innerHTML = 3;
 sessionStorage.setItem('numFloor', 3);     
 sessionStorage.setItem('numIndex', 6);
 sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 4) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[4])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[5])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 35);
				 floor.innerHTML = 3;
				 sessionStorage.setItem('numFloor', 3);     
				 sessionStorage.setItem('numIndex', 6);
				 sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 5) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[5])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 25);
				 floor.innerHTML = 3;
				 sessionStorage.setItem('numFloor', 3);     
				 sessionStorage.setItem('numIndex', 6);
				 sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 6) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[7])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[8])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 45);
 floor.innerHTML = 4;
 sessionStorage.setItem('numFloor', 4);     
 sessionStorage.setItem('numIndex', 9);
 sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 7) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[7])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[8])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 35);
				 floor.innerHTML = 4;
				 sessionStorage.setItem('numFloor', 4);     
				 sessionStorage.setItem('numIndex', 9);
				 sessionStorage.setItem('arrayImg', arr[9]);
}  else if (numIndex == 8) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[8])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 25);
				 floor.innerHTML = 4;
				 sessionStorage.setItem('numFloor', 4);     
				 sessionStorage.setItem('numIndex', 9);
				 sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 9) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[10])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[11])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 45);
 floor.innerHTML = 5;
 sessionStorage.setItem('numFloor', 5);     
 sessionStorage.setItem('numIndex', 12);
 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 10) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[10])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[11])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 35);
				 floor.innerHTML = 5;
				 sessionStorage.setItem('numFloor', 5);     
				 sessionStorage.setItem('numIndex', 12);
				 sessionStorage.setItem('arrayImg', arr[12]);
}  else if (numIndex == 11) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[11])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 25);
				 floor.innerHTML = 5;
				 sessionStorage.setItem('numFloor', 5);     
				 sessionStorage.setItem('numIndex', 12);
				 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 12) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[13])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[14])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 45);
 floor.innerHTML = 6;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 15);
 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 13) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[13])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[14])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 35);
				 floor.innerHTML = 6;
				 sessionStorage.setItem('numFloor', 6);     
				 sessionStorage.setItem('numIndex', 15);
				 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 14) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[14])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 25);
				 floor.innerHTML = 6;
				 sessionStorage.setItem('numFloor', 6);     
				 sessionStorage.setItem('numIndex', 15);
				 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 15) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[16])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[17])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 45);
 floor.innerHTML = 7;
 sessionStorage.setItem('numFloor', 7);     
 sessionStorage.setItem('numIndex', 18);
 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 16) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[16])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[17])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 35);
				 floor.innerHTML = 7;
				 sessionStorage.setItem('numFloor', 7);     
				 sessionStorage.setItem('numIndex', 18);
				 sessionStorage.setItem('arrayImg', arr[18]);
}  else if (numIndex == 17) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[17])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 25);
				 floor.innerHTML = 7;
				 sessionStorage.setItem('numFloor', 7);     
				 sessionStorage.setItem('numIndex', 18);
				 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 18) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[19])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[20])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 45);
 floor.innerHTML = 8;
 sessionStorage.setItem('numFloor', 8);     
 sessionStorage.setItem('numIndex', 21);
 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 19) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[19])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[20])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 35);
				 floor.innerHTML = 8;
				 sessionStorage.setItem('numFloor', 8);     
				 sessionStorage.setItem('numIndex', 21);
				 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 20) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[20])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 25);
				 floor.innerHTML = 8;
				 sessionStorage.setItem('numFloor', 8);     
				 sessionStorage.setItem('numIndex', 21);
				 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 21) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[22])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[23])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 45);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);     
 sessionStorage.setItem('numIndex', 24);
 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 22) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[22])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[23])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 35);
				 floor.innerHTML = 9;
				 sessionStorage.setItem('numFloor', 9);     
				 sessionStorage.setItem('numIndex', 24);
				 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 23) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[23])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 25);
				 floor.innerHTML = 9;
				 sessionStorage.setItem('numFloor', 9);     
				 sessionStorage.setItem('numIndex', 24);
				 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 24) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[25])}, 25);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[26])}, 35);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 45);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 55);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 65);
 floor.innerHTML = 10;
 sessionStorage.setItem('numFloor', 10);     
 sessionStorage.setItem('numIndex', 29);
 sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 25) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[25])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[26])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 45);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 55);
				 floor.innerHTML = 10;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 29);
				 sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 26) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[26])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 45);
				 floor.innerHTML = 10;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 29);
				 sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 27) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 35);
				 floor.innerHTML = 10;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 29);
				 sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 28) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 25);
				 floor.innerHTML = 10;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 29);
				 sessionStorage.setItem('arrayImg', arr[29]);
}  else if (numIndex == 29) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 15);
				 floor.innerHTML = 10;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 29);
				 sessionStorage.setItem('arrayImg', arr[29]);
}  

});



$('#bottom').on('click', function(){

numFloor = +sessionStorage.getItem('numFloor');     
numIndex = +sessionStorage.getItem('numIndex');
arrayImg = sessionStorage.getItem('arrayImg');

if (numIndex == 0) { 
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[0])}, 15);
 floor.innerHTML = 1;
 sessionStorage.setItem('numFloor', 1);     
 sessionStorage.setItem('numIndex', 0);
 sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 1) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[1])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[0])}, 25);
				 floor.innerHTML = 1;
				 sessionStorage.setItem('numFloor', 1);     
				 sessionStorage.setItem('numIndex', 0);
				 sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 2) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[2])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[1])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[0])}, 35);
				 floor.innerHTML = 1;
				 sessionStorage.setItem('numFloor', 1);     
				 sessionStorage.setItem('numIndex', 0);
				 sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 3) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[2])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[1])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[0])}, 45);
				 floor.innerHTML = 1;
				 sessionStorage.setItem('numFloor', 1);     
				 sessionStorage.setItem('numIndex', 0);
				 sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 4) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[4])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 25);
 floor.innerHTML = 2;
 sessionStorage.setItem('numFloor', 2);     
 sessionStorage.setItem('numIndex', 3);
 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 5) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[5])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[4])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 35);
				 floor.innerHTML = 2;
				 sessionStorage.setItem('numFloor', 2);     
				 sessionStorage.setItem('numIndex', 3);
				 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 6) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[5])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[4])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[3])}, 45);
				 floor.innerHTML = 2;
				 sessionStorage.setItem('numFloor', 2);     
				 sessionStorage.setItem('numIndex', 3);
				 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 7) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[7])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 25);
 floor.innerHTML = 3;
 sessionStorage.setItem('numFloor', 3);
 sessionStorage.setItem('numIndex', 6);
 sessionStorage.setItem('arrayImg', arr[6]);
}  else if (numIndex == 8) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[8])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[7])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 35);
				 floor.innerHTML = 3;
				 sessionStorage.setItem('numFloor', 3);     
				 sessionStorage.setItem('numIndex', 6);
				 sessionStorage.setItem('arrayImg', arr[6]);			 
} else if (numIndex == 9) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[8])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[7])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[6])}, 45);
				 floor.innerHTML = 3;
				 sessionStorage.setItem('numFloor', 3);     
				 sessionStorage.setItem('numIndex', 6);
				 sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 10) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[10])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 25);
 floor.innerHTML = 4;
 sessionStorage.setItem('numFloor', 4);     
 sessionStorage.setItem('numIndex', 9);
 sessionStorage.setItem('arrayImg', arr[9]);
}  else if (numIndex == 11) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[11])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[10])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 35);
				 floor.innerHTML = 4;
				 sessionStorage.setItem('numFloor', 4);     
				 sessionStorage.setItem('numIndex', 9);
				 sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 12) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[11])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[10])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[9])}, 45);
				 floor.innerHTML = 4;
				 sessionStorage.setItem('numFloor', 4);     
				 sessionStorage.setItem('numIndex', 9);
				 sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 13) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[13])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 25);
 floor.innerHTML = 5;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 12);
 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 14) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[14])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[13])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 35);
				 floor.innerHTML = 5;
				 sessionStorage.setItem('numFloor', 6);     
				 sessionStorage.setItem('numIndex', 12);
				 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 15) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[14])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[13])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[12])}, 45);
				 floor.innerHTML = 5;
				 sessionStorage.setItem('numFloor', 5);     
				 sessionStorage.setItem('numIndex', 12);
				 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 16) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[16])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 25);
 floor.innerHTML = 6;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 15);
 sessionStorage.setItem('arrayImg', arr[15]);
}  else if (numIndex == 17) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[17])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[16])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 35);
				 floor.innerHTML = 6;
				 sessionStorage.setItem('numFloor', 6);     
				 sessionStorage.setItem('numIndex', 15);
				 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 18) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[17])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[16])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[15])}, 45);
				 floor.innerHTML = 6;
				 sessionStorage.setItem('numFloor', 6);     
				 sessionStorage.setItem('numIndex', 15);
				 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 19) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[19])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 25);
 floor.innerHTML = 7;
 sessionStorage.setItem('numFloor', 7);     
 sessionStorage.setItem('numIndex', 18);
 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 20) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[20])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[19])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 35);
				 floor.innerHTML = 7;
				 sessionStorage.setItem('numFloor', 7);     
				 sessionStorage.setItem('numIndex', 18);
				 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 21) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[20])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[19])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[18])}, 45);
				 floor.innerHTML = 7;
				 sessionStorage.setItem('numFloor', 7);     
				 sessionStorage.setItem('numIndex', 18);
				 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 22) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[22])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 25);
 floor.innerHTML = 8;
 sessionStorage.setItem('numFloor', 8);     
 sessionStorage.setItem('numIndex', 21);
 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 23) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[23])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[22])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 35);
				 floor.innerHTML = 8;
				 sessionStorage.setItem('numFloor', 8);     
				 sessionStorage.setItem('numIndex', 21);
				 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 24) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[23])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[22])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[21])}, 45);
				 floor.innerHTML = 8;
				 sessionStorage.setItem('numFloor', 8);     
				 sessionStorage.setItem('numIndex', 21);
				 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 25) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[25])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 25);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);
 sessionStorage.setItem('numIndex', 24);
 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 26) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[26])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[25])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 35);
				 floor.innerHTML = 9;
				 sessionStorage.setItem('numFloor', 9);     
				 sessionStorage.setItem('numIndex', 24);
				 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 27) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[26])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[25])}, 35);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[24])}, 45);
				 floor.innerHTML = 9;
				 sessionStorage.setItem('numFloor', 9);     
				 sessionStorage.setItem('numIndex', 24);
				 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 28) {
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 15);
 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 25);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);
 sessionStorage.setItem('numIndex', 27);
 sessionStorage.setItem('arrayImg', arr[27]);
}  else if (numIndex == 29) {
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[29])}, 15);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[28])}, 25);
				 setTimeout(function(){$('#bg-img-anim').attr('src', arr[27])}, 35);
				 floor.innerHTML = 9;
				 sessionStorage.setItem('numFloor', 10);     
				 sessionStorage.setItem('numIndex', 27);
				 sessionStorage.setItem('arrayImg', arr[27]);
}  

});



// init
bgmask.addEventListener("mousedown", function(){position ()});
document.addEventListener("mouseup", function(){document.onmousemove = null});


//cache update
function onUpdateReady() {
  console.log('found new version!');
}
window.applicationCache.addEventListener('updateready', onUpdateReady);
if(window.applicationCache.status === window.applicationCache.UPDATEREADY) {
  onUpdateReady();
} 

  </script>
  </html>