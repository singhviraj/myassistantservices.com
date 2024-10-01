<?php 
session_start();
include '../config/config.php';


if(isset($_POST['cat_btn'])){

    $name= mysqli_real_escape_string($conn, $_POST['name']);
   // $slug= mysqli_real_escape_string($conn, $_POST['slug']);

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["slug"])));
    $status =  $_POST['cat_status'] == true ? '1':'0';
 

    
    $add_category =  "INSERT INTO blog_category (cat_name, cat_slug, cat_status) VALUES('$name', '$slug', '$status')";
    $add_category_run = mysqli_query($conn, $add_category);
    if($add_category_run){

       $_SESSION['message'] = "Category Added Successfully!";
        header('Location:../blog-category.php');
    }
    else{
        $_SESSION['error'] = "Not Added!";
        header('Location:../add-blog-category.php');
    }
     
   
}


// Delete Category Code Here

if(isset($_POST['delete_btn'])){

    $cat_id = $_POST['category_delete'];

    $cat_delete = "DELETE FROM `blog_category` WHERE cat_id = $cat_id";
    $cat_delete_run = mysqli_query($conn, $cat_delete);
    if($cat_delete_run){
        $_SESSION['message'] = "Category Deleted Successfully!";
        header('Location:../blog-category.php');
    }
    else{

        $_SESSION['error'] = "Not Deleted";
        header('Location:../blog-category.php');

    }
}

// Delete categroy end Here

// update category here

if(isset($_POST['update_cat_btn'])){
   
    $cat_id = $_POST['cat_id'];
   $name =  $_POST['name'];
   // $slug = $_POST['slug'];

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["slug"])));
    
    $status = $_POST['cat_status'] == true ? '1':'0';

    $update_cat = "UPDATE `blog_category` SET `cat_name`='$name',`cat_slug`='$slug',`cat_status`='$status' WHERE cat_id = $cat_id";
    $update_cat_run  = mysqli_query($conn, $update_cat);
    if($update_cat_run){

        $_SESSION['message'] = "Update Successfully!";
        header('Location:../blog-category.php');
        
    }
    else{
        $_SESSION['error'] = "Not Update!";
        header('Location:../blog-category.php');
    }

}



/// Add blog

if(isset($_POST['add_btn'])){

    $category_id  = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["slug"])));
    $body = $_POST['body'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $image =  $_FILES['image']['name'];
    $img_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$img_extension;
 
    $status =  $_POST['status'] == true ? '1':'0';
    

    $add_blog =  "INSERT INTO `blog`(`cate_id`, `title`, `slug`, `body`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `status`) 
    VALUES ('$category_id','$name','$slug','$body','$meta_title','$meta_description','$meta_keywords','$filename','$status')";
    $add_blog_run = mysqli_query($conn, $add_blog);
    var_dump($add_blog); die();
    if($add_blog_run){

        move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$filename);
       $_SESSION['message'] = "Post Added Successfully!";
        header('Location:../manage-post.php');
    }
    else{
        $_SESSION['error'] = "Post Not Added!";
        header('Location:../add-post.php');
    }
     

}




// Delete post Code Here

if(isset($_POST['post_delete_btn'])){

    $id = $_POST['post_delete'];

  
    $post_delete = "DELETE FROM blog WHERE id = $id";
    $post_delete_run = mysqli_query($conn, $post_delete);
    if($post_delete_run){
        $_SESSION['message'] = "Post Deleted Successfully!";
        header('Location:../manage-post.php');
        exit(0);
    }
    else{

        $_SESSION['error'] = "Not Deleted";
        header('Location:../manage-post.php');
       

    }
}

// Delete post end Here


// Post Update Code Here

if(isset($_POST['update_btn'])){
    
    $id = $_POST['id'];
    $category_id  = $_POST['category_id'];
    $name = $_POST['name'];
   // $slug = $_POST['slug'];  
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["slug"])));
    $body = $_POST['body'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];

    $old_image = $_POST['old_image'];
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
    
    
    
    $update_blog = "UPDATE `blog` SET `cate_id`='$category_id',`title`='$name',`slug`='$slug',`body`='$body',`meta_title`='$meta_title',`meta_description`='$meta_description',`meta_keywords`='$meta_keywords',`image`='$update_filename',`status`='$status' WHERE id = $id";
    
    $add_blog_run = mysqli_query($conn, $update_blog);
    if($add_blog_run){

        if($image != NULL){
            if(file_exists('../upload/'.$old_image)){
              unlink("../upload/'.$old_image");
            }
            move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$update_filename);
        }
       $_SESSION['message'] = "Post Updated Successfully!";
        header('Location:../manage-post.php');
    }
    else{
        $_SESSION['error'] = "Post Not Updated!";
        header('Location:../edit-post.php');
    }
     

}
?>