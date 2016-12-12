<script>
var text = "images/vid-23.jpg";
var a = text.split ('images/');
var b = a[1].split('.jpg');
var c = b[0].split('vid-');
var elem = c[1];
console.log(elem);

</script>