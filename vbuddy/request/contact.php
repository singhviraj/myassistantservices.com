<?php
session_start();
include '../config/config.php';

if(isset($_POST['delete_btn'])){
    
    $id = $_POST['contact_delete'];
    
    $query = "DELETE FROM `contact_us` WHERE id ='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        
        $_SESSION['message'] = "Lead Deleted Successfully";
        header('Location:../contact.php');
        die();
    }
    
    else{
         $_SESSION['error'] = "Lead Not Deleted";
        header('Location:../contact.php');
         die();
        
    }
}

?>
