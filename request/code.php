<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vbuddy/config/config.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
 
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    

    
    //Create an instance; passing `true` enables exceptions
    
    if($name == "RonaldLap" || $name == "Crytosoyncsoync" || $name == "Mayortapy" || $name == "Donaldfak"){
          $_SESSION["applied"]  ="you have already applied";
            header('Location: ' .$_SERVER["HTTP_REFERER"]);  
            die;
        
    }
    else{

        $query =  "INSERT INTO `contact_us`(`name`, `phone`, `email`, `services`, `message`) 
        VALUES ('$name','$mobile', '$email', '$service','$message')";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            
             $_SESSION["message"]  ="Hey! " . $name . " we wiil connect you soon!";
            header('Location: ' .$_SERVER["HTTP_REFERER"]);  
            die;
        }
        else{
          echo "Not Appliend";
          header('Location: ' .$_SERVER["HTTP_REFERER"]);  
        }
}

}
?>