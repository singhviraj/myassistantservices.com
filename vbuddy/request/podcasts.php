
<?php
/// Add blog

session_start();
include '../config/config.php';


if(isset($_POST['add_btn'])){
    
    $name = $_POST['title'];
    //$slug = $_POST['slug'];
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));
    $description = $_POST['description'];
    $code = $_POST['code'];
 
    $image =  $_FILES['image']['name'];
    $img_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$img_extension;
 
    $status =  $_POST['status'] == true ? '1':'0';
    

    $add_podcatst =  "INSERT INTO `podcasts`(`pod_title`, `description`, `embed_code`, `image`, `slug`, `status`) 
    VALUES ('$name','$description','$code','$filename','$slug','$status')";
    
    $add_pod_run = mysqli_query($conn, $add_podcatst);
    if($add_pod_run){

        move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$filename);
       $_SESSION['message'] = "Podcats Added Successfully!";
        header('Location:../manage-podcasts.php');
    }
    else{
        $_SESSION['error'] = "Post Not Added!";
        header('Location:../add-podcats.php');
    }
     

}


// update code here 


if(isset($_POST['update_btn'])){
    
    $id = $_POST['id'];
    $name = $_POST['title'];
    //$slug = $_POST['slug'];
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));
    $description = $_POST['description'];
    $code = $_POST['code'];
 
    $old_image =  $_POST['old_image'];
    $image =  $_FILES['image']['name'];

    $update_filename = "";
    if($image != NULL){

        $img_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$img_extension;
        $update_filename = $filename;

    }
    else{

        $update_filename = $old_image;
    }
   
 
    $status =  $_POST['status'] == true ? '1':'0';
    
   $update_pods = "UPDATE `podcasts` SET `pod_title`='$name',`description`='$description',`embed_code`='$code',`image`='$update_filename',`slug`='$slug',`status`='$status' WHERE id = '$id'";


    $update_pod_run = mysqli_query($conn, $update_pods);
    if($update_pod_run){

        if($image != NULL){
            if(file_exists('../upload/'.$old_image)){
              unlink("../upload/'.$old_image");
            }
            move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$update_filename);
        }
    
       $_SESSION['message'] = "Podcats Updated Successfully!";
        header('Location:../manage-podcasts.php');
    }
    else{
        $_SESSION['error'] = "Post not Updated!";
        header('Location:../add-podcats.php');
    }
}


// Delete Pods code Here

if(isset($_POST['delete_btn'])){
   $id  =  $_POST['pods_delete'];

   $delete_pods =  "DELETE FROM `podcasts` WHERE id = '$id'";
   $delete_pods_run  =  mysqli_query($conn, $delete_pods);
   if($delete_pods_run){
    $_SESSION['message'] = "Podcasts deleted successfully!";
    header('Location:../manage-podcasts.php');
   }
   else{
    $_SESSION['error'] = "Podcasts not deleted!";
    header('Location:../manage-podcasts.php');

   }
}


?>

