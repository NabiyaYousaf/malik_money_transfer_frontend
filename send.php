<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if(isset($_POST['send'])){
$mail = new PHPMailer(true);

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'testingswh@gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'testingswh@gmail.com';                     //SMTP username
    $mail->Password   = '@!!!231105581Ws';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mail', 'Mailer');
    $mail->addAddress($_POST['email']);     //Add a recipient

   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =$_POST['name']." - ".$_POST['subject'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    echo '<script>alert(Message has been sent)</script>';


}