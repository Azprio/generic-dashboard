<?php

    $mailto = 'rumman189@gmail.com';
    $mailSub = 'hello';
    $mailMsg = 'This is the 2 bill';
   require '../assets/PHPMailer-master/PHPMailerAutoload.php';
   
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "rumman3000@gmail.com";
   $mail ->Password = "031750045";
   $mail ->SetFrom("rumman3000@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
      // echo "Mail Not Sent";
      
   }
   else
   {
    header("Location: dashboard.php");
     //  echo "Mail Sent";
   }





   

