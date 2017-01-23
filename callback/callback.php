<?
if (array_key_exists('contactFF', $_POST)) {
   $to = 'rtv@veles.place';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['nameFF']."\nПерезвоните мне, телефон: ".$_POST['contactFF'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y H:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);

}
?>