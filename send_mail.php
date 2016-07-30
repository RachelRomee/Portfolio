<?php
if($_POST) {
         $to = "rachelromee@icloud.com";
         $subject = "Mail via contactformulier";
         $name .= $_POST['name'];
         $from .= $_POST['email'];

         $message = "<b>Bericht van </b>". $name . "<br /><br />";
         $message .= $_POST['message'];

         $header = "From:".$from." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $mail_succes = mail ($to,$subject,$message,$header);

         if( $mail_succes == true ) {
            header("Location: ../index.html");
         } else {
            echo "Message could not be sent...";
         }
       }
      ?>
