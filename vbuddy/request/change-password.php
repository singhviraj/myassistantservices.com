<?php 
session_start();
include '../config/config.php';


if(isset($_POST['update_password'])){
    $new_pass = md5($_POST['new_password']);
    $old_pass = md5($_POST['old_password']);

    $id = $_SESSION['ID'];/* userid of the user */


    if(count($_POST)>0) {
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id='" . $id . "'");
    $row=mysqli_fetch_array($result);
    if($old_pass == $row["password"] ) {
    mysqli_query($conn, "UPDATE users set password='" . $new_pass . "' WHERE id='" . $id . "'");
    $_SESSION['message']  = "Password has been updated!";
        header('Location:../change-password.php');
    } else{
        $_SESSION['error']  = "Current password not matched!";
        header('Location:../change-password.php');
    }
    }
   
}

?>


