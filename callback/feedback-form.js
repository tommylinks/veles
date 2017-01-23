


document.getElementById('snt-order-form').addEventListener('submit', function(evt){

  if ((document.getElementById('mail-form-name').value !== '') && (document.getElementById('mail-form-tel').value !== '')  ) {
  
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "/omega/callback/mail.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	http.send("nameMM=" + f.nameMM.value + "&contactMM=" + f.contactMM.value + "&messageMM=" + f.messageMM.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {

        $('.si-modal').fadeOut();
        setTimeout(function() {
          $('.si-success-modal').fadeIn();
        },1000 );
       function explode(){
        $('.si-modal-wrapper').fadeOut();
        $('.si-success-modal').fadeOut();
        $('.si-overlay, .overlay, .si-modals-wrapper').fadeOut();
        // document.location.reload(true);
        }
        setTimeout(explode, 4000); 
        
        f.contactMM.value=''; 
    }
  };
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  };

} else {alert('Впишите имя и телефон');}

}, false);

