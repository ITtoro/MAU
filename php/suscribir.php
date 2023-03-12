<?php
   // print_r($_POST);
   $email = $_POST['email'];

   $error = '';
   if(trim($email) == '')
      $error = 'Introduce tu correo electrónico';


   if($error != '') {
      echo $error;
      exit;
   }

   $subject = "=?utf-8?B?".base64_encode("PROBAR")."?=";
   $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

   mail('mauartesania@gmail.com', $subject, $headers);

   header('Location: /conócenos.html');

?>