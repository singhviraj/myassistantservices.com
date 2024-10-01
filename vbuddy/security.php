<?php 

if(!isset($_SESSION['IS_LOGIN'])){
// $_SESSION['message'] = "Login to access Dashboard";
header('Location:login.php');
die();
}

?>