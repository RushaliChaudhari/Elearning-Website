<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Contact Form </title>
  <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
     <script src="https://kit.fontawesome.com/248d218fad.js" crossorigin="anonymous"></script>
    
</head>

<body>
  <!-- contact1 -->
 
        <div class="header">
       
            <nav >
                <div class="logo">
                    <img src="capstonelogo.png">
                </div>
                <div class="background">
                     
                     <div class="contact-form">
                           
                             <div class="frontbox">
                                 <h2>Interact with us....!</h2>
                                 <div class="gif">
                                     <img src="contactGIF.gif" style="width: 300px; height: 200px;">
                                 </div>
      <form method="POST" class="contact">
        <h2>Contact Us</h2>
        <input type="text" name="Name" class="text-box" id="Name" placeholder="Your Name" required pattern="^[a-zA-Z ]{2,30}$">
                                
        <input type="email" placeholder="Enter Your Email Address" required pattern="\S+@\S+\.\S+" name="Email" class="text-box">
        <textarea rows="3" class="text-box1" placeholder="Message" name="Message"></textarea>
        <button type="submit" class="send-btn" name="LOGIN">SEND</button>
      </form>
    </div>
  </div>
  
 <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('PHPMailer/Exception.php');
require ('PHPMailer/SMTP.php');
require ('PHPMailer/PHPMailer.php');


if(isset($_POST['LOGIN']))
{
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $message=$_POST['Message'];

  $mail = new PHPMailer(true);
  try {
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'learnio1234@gmail.com';                     //SMTP username
    $mail->Password   = 'learnio@04';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('learnio1234@gmail.com', 'learnio');
    $mail->addAddress('learnio1234@gmail.com');     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'contact us';
    $mail->Body    = "Name: $name <br> Email: $email <br> Message: $message";
    
    $mail->send();
    echo "<script>alert('Message has been sent')</script>";

  } catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
  }
}

 ?>

</body>
</html>