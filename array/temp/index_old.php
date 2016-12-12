<?php
$file = 'manifest.appcache';
$current = file_get_contents($file);
file_put_contents($file, $current, LOCK_EX);
?>

<html  manifest="manifest.appcache">



<script type="text/javascript" src="jquery.min.js"></script>



 <style type="text/css">

  body {
      overflow: hidden;
      padding: 0;
      margin: 0;
      min-height: 100vh;
  }
  #second {
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
 </style>

 <body>
	<div id="first" style = "cursor: move; position: absolute; width: 100%; height: 100%;  margin: 0; z-index: 0; padding: 0;"> </div>
	<img id="second" src="00.jpg" />
  <div id = "floor">0</div>
 </body>


 <script>
    var urls = '00.jpg, 01.jpg, 02.jpg, 03.jpg, 04.jpg, 05.jpg, 06.jpg, 07.jpg, 08.jpg, 09.jpg, 10.jpg, 11.jpg, 12.jpg, 13.jpg, 14.jpg, 15.jpg, 16.jpg, 17.jpg, 18.jpg, 19.jpg, 20.jpg, 21.jpg, 22.jpg, 23.jpg, 24.jpg, 25.jpg';
    
    var arr = urls.split(', ');
    
    for (var i = 0; i < arr.length; i++) {
      var arrayImg = arr[i];
    }

		    var screenHeight = screen.height;
        var stepFloor = screen.height / arr.length;
        var a = 0 + stepFloor;
        var b = a + stepFloor;
        var c = b + stepFloor;
        var d = c + stepFloor;
        var e = d + stepFloor;
        var f = e + stepFloor;
        var g = f + stepFloor;
        var h = g + stepFloor;
        var i = h + stepFloor;
        var j = i + stepFloor;
        var k = j + stepFloor;
        var l = k + stepFloor;
        var m = l + stepFloor;
        var n = m + stepFloor;
        var o = n + stepFloor;
        var p = o + stepFloor;
        var q = p + stepFloor;
        var r = q + stepFloor;
        var s = r + stepFloor;
        var t = s + stepFloor;
        var v = t + stepFloor;
        var w = v + stepFloor;
        var x = w + stepFloor;
        var y = x + stepFloor;
        var z = y + stepFloor;
        var za = z + stepFloor;


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

            event.pageX = event.clientX +
              (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
              (doc && doc.clientLeft || body && body.clientLeft || 0);
            event.pageY = event.clientY +
              (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
              (doc && doc.clientTop  || body && body.clientTop  || 0 );
        }
       console.log( event.pageY )

        // Use event.pageX / event.pageY here

        
        if (event.pageY < a) {
          arrayImg = arr[0];
          floor.innerHTML = '0';
        } else if (event.pageY < b) { 
          arrayImg = arr[1];
        } else if (event.pageY < c) { 
          arrayImg = arr[2];
          floor.innerHTML = '1';
        } else if (event.pageY < d) { 
          arrayImg = arr[3];
        } else if (event.pageY < e) { 
          arrayImg = arr[4];
        } else if (event.pageY < f) { 
          arrayImg = arr[5];
          floor.innerHTML = '2';
        } else if (event.pageY < g) { 
          arrayImg = arr[6];
        } else if (event.pageY < h) { 
          arrayImg = arr[7];
          floor.innerHTML = '3';
        } else if (event.pageY < i) { 
          arrayImg = arr[8];
        } else if (event.pageY < j) { 
          arrayImg = arr[9];
          floor.innerHTML = '4';
        } else if (event.pageY < k) { 
          arrayImg = arr[10];
        } else if (event.pageY < l) { 
          arrayImg = arr[11];        
        } else if (event.pageY < m) { 
          arrayImg = arr[12];
          floor.innerHTML = '5';
        } else if (event.pageY < n) { 
          arrayImg = arr[13];
        } else if (event.pageY < o) { 
          arrayImg = arr[14];          
        } else if (event.pageY < p) { 
          arrayImg = arr[15];
          floor.innerHTML = '6';
        } else if (event.pageY < q) { 
          arrayImg = arr[16];
        } else if (event.pageY < r) { 
          arrayImg = arr[17];
          floor.innerHTML = '7';
        } else if (event.pageY < s) { 
          arrayImg = arr[18];
        } else if (event.pageY < t) { 
          arrayImg = arr[19]; 
          floor.innerHTML = '8';        
        } else if (event.pageY < v) { 
          arrayImg = arr[20];
        } else if (event.pageY < w) { 
          arrayImg = arr[21];
          floor.innerHTML = '9'; 
        } else if (event.pageY < x) { 
          arrayImg = arr[22];
        } else if (event.pageY < y) { 
          arrayImg = arr[23];
          floor.innerHTML = '10';
        } else if (event.pageY < z) { 
          arrayImg = arr[24];      
        } else if (event.pageY < za) { 
          arrayImg = arr[25];
        } else if (event.pageY < 0 || event.pageY > screenHeight) {
          document.onmousemove = null;
          console.log('stop machine!');
        }

    $('#second').attr('src', arrayImg);

    }
};


// init
document.addEventListener("mousedown", function(){position ()});
document.addEventListener("mouseup", function(){document.onmousemove = null});

//cache
//console.log(window.applicationCache.status);
function onUpdateReady() {
  console.log('found new version!');
}
window.applicationCache.addEventListener('updateready', onUpdateReady);
if(window.applicationCache.status === window.applicationCache.UPDATEREADY) {
  onUpdateReady();
}	

  </script>
  </html>