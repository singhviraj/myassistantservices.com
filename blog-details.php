<?php 
 $slug = $_GET['slug'];
   include 'vbuddy/config/config.php';

   $blog = "SELECT * FROM blog WHERE slug = '$slug'";
   $blog_run = mysqli_query($conn, $blog);
   if(mysqli_num_rows($blog_run) > 0){
       
       $row = mysqli_fetch_assoc($blog_run);
       
       $title = $row['meta_title'];
       $discription = $row['meta_description'];
       $keyword = $row['meta_keywords'];
       
   }
   else{
       
       
$title = "Myassistantservices";
$discription ="";
$keyword ="";

   }



include 'includes/header.php';


?>

<!-- <section class="about-page">
     <h3>Blog Details</h3>
</section> -->

<div class="container mb-5 mt-5">
    <div class="row">
  
    <?php
    $slug = $_GET['slug'];
   include 'vbuddy/config/config.php';

   $blog = "SELECT * FROM blog WHERE slug = '$slug'";
   $blog_run = mysqli_query($conn, $blog);
   if(mysqli_num_rows($blog_run) > 0){
     foreach($blog_run as $data){
         ?>
     <div class="col-md-9 col-lg-9 col-xl-9 mb-3">
      
                <p>Post Date : <?php echo date('d F, Y', strtotime($data['post_date'])); ?></p>
           
                <h1 class="p-2 fs-2"><?php echo $data['title']; ?></h1>
                <p><?php echo $data['body']; ?></p>
          
     </div>
<?php
     }
    }
?>

<div class="col-md-3 col-lg-3 col-xl-3 mt-5">
<div class="input-group mb-5">
    <input type="search" class="form-control py-3" placeholder="Search" id="inputGroupFile02">
    <button type="submit" class="input-group-text btn-warning" for="inputGroupFile02"><i class="fa fa-search"></i></button>
</div>
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Latest Post</h5>
        </div>
        <div class="card-body">

        <ul class="list-group">
        <?php
   include 'vbuddy/config/config.php';

   $blog = "SELECT * FROM blog WHERE status = 1 ORDER BY id DESC LIMIT 6";
   $blog_run = mysqli_query($conn, $blog);
   if(mysqli_num_rows($blog_run) > 0){
     foreach($blog_run as $data){
        $meta_title =  $data['meta_title'];
      
         ?>
  <li class="list-group-item" style="padding: 8px 0;"><a href="<?php echo $data['slug']; ?>"><?php echo $data['title']; ?></a></li>
  
  <?php
   }
}
?>
</ul>
        </div>
    </div>
</div>
      
    </div>
</div>



<?php include  'includes/info.php' ?>
<?php include  'includes/footer.php' ?>
