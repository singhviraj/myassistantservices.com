<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//require '../vendor/phpmailer/phpmailer/src/Exception.php';
//require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vbuddy/config/config.php';
require '../vendor/autoload.php';
 
   

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
//code for PHPMailer

$name1 = $_POST['name'];
$email1 = $_POST['email'];
$mobile1 = $_POST['mobile'];
$service1 = $_POST['service'];
$message1 = $_POST['message'];

$mail = new PHPMailer(true);


    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@myassistantservices.com';                     //SMTP username
    $mail->Password   = 'vjhp ufxj sses xhdn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@myassistantservices.com', 'Sukhvinder Dhull');
    $mail->addAddress('info@myassistantservices.com', 'Sukhvinder Dhull');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '
    <h4>'.$name1.'</h4><br>
    <h4>'.$email1.'</h4><br>
    <h4>'.$mobile1.'</h4><br>
    <h4>'.$service1.'</h4><br>
    <h4>'.$message1.'</h4>';
    

    $mail->send();

    




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