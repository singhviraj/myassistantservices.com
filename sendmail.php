<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    
     $body = '<html><head> </head>';
   
      $body = '<body>';
    
      $body .= '<table class="table">';
      $body .= "<tr style='border:1px solid black;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
      $body .= "<tr style='border:1px solid black;'><td><strong>Mobile No:</strong> </td><td>" .$mobile. "</td></tr>";
      
         $body .= "<tr style='border:1px solid black;'><td><strong>Service:</strong> </td><td>" .$service . "</td></tr>";
      
      $body .= "<tr style='border:1px solid black;'><td><strong>Message :</strong> </td><td>" .  $message . "</td></tr>";
      
      $body .= "</table>";
      $body .= "</body></html>";
    
    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Surendrabaitha@myassistantservices.com'; 
                      //SMTP username
    $mail->Password   = 'Myassistant2022!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Surendrabaitha@myassistantservices.com', 'My Assistant Services');
    $mail->addAddress('Surendrabaitha@myassistantservices.com');     //Add a recipient
    $mail->addAddress('ravi.sharma@virtualbuddys.com');     //Add a recipient
    
  //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $service;
    $mail->Body    =  $body;
    

    $mail->send();
    
      $_SESSION["message"]  ="Hey! " . $name . " we wiil connect you soon!";
     
    header('Location: ' .$_SERVER["HTTP_REFERER"]);  

     die;
     
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>