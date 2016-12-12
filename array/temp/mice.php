<html>



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

/*(function() {
    var mousePos;

    document.onmousemove = handleMouseMove;
    setInterval(getMousePosition, 100); // setInterval repeats every X ms

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

        mousePos = {
            x: event.pageX,
            y: event.pageY
        };
    }
    function getMousePosition() {
        var pos = mousePos;
        if (!pos) {
            // We haven't seen any movement yet
        }
        else {
            // Use pos.x and pos.y
        }
        console.log(mousePos.y);
    }
})();*/

var urls = '00.jpg, 01.jpg, 02.jpg, 03.jpg, 04.jpg, 05.jpg, 06.jpg, 07.jpg, 08.jpg, 09.jpg, 10.jpg, 11.jpg, 12.jpg, 13.jpg, 14.jpg, 15.jpg, 16.jpg, 17.jpg, 18.jpg, 19.jpg, 20.jpg, 21.jpg, 22.jpg, 23.jpg, 24.jpg, 25.jpg';

var arr = urls.split(', ');
var a;
var timeout = 0;
var arrayImg;

for (var i = 0; i < arr.length; i++) { 

   setTimeout(function() {
    a = i++ - arr.length;
    arrayImg = arr[a]; 
    console.log(arr[a]);
    $('#second').attr('src', arrayImg);
  }, timeout);


  timeout += 1000;

    }

</script>

</html>