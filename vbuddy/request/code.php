<?php
session_start();
include '../config/config.php';

if(isset($_POST['login'])){

    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $pwd = md5($password);
    
  $query =  "SELECT * FROM users WHERE email = '$email' AND password = '$pwd'";
  
  $res = mysqli_query($conn, $query);
   if(mysqli_num_rows($res) > 0){

    foreach($res as $row){
  $_SESSION['ID'] = $row['id'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['IS_LOGIN'] = 'yes';
    }

    header('Location:../index.php');

   }
  else{
   $_SESSION['error'] = "Something went wrong! please try Again";
   header('Location:../login.php');
  }
  
  }
?>