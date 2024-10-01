<?php 

$title="Blog - My Assistant Services";
$discription ="When you don’t have enough space, internet connection, or limited computers and other resources, then online virtual assistance services are a good option. ";
$keyword ="virtual assistant services to offer, virtual assistant support services, virtual assistant services reviews
services a virtual assistant can offer";
$canonical ="https://www.myassistantservices.com/about.php";

include  'includes/header.php';


?>

<section class="about-page">
     <h3>Blog</h3>
</section>

<div class="container mb-5 mt-5">
    <div class="row">
  
    <?php
   include 'vbuddy/config/config.php';

   $blog = "SELECT * FROM blog WHERE status = 1 ORDER BY id DESC";
   $blog_run = mysqli_query($conn, $blog);
   if(mysqli_num_rows($blog_run) > 0){
     foreach($blog_run as $data){
         ?>
     <div class="col-md-4 col-lg-4 col-xl-4 mb-5">
        <div class="card shadow-sm rounded">
            <div class="card-body p-0">
            <a href="<?php echo $data['slug']; ?>" class="text-dark">
                <img src="vbuddy/upload/<?php echo $data['image']; ?>" width="100%" height="330px" alt="">
                <div class="caption btn btn-danger w-50"><?php echo date('d-m-y', strtotime($data['post_date'])); ?></div>
                <h3 class="p-2" style="font-size: 20px !important;"><?php echo substr($data['title'], 0, 35,), '...' ?></h3>
            </a>
            </div>
        </div>
     </div>
<?php
     }
    }
?>
      
    </div>
</div>



<?php include  'includes/info.php' ?>
<?php include  'includes/footer.php' ?>
