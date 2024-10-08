<?php include  'includes/header.php';
include  'security.php';

?>
<?php include  'includes/top-navbar.php' ?>
<?php include  'includes/side-menu.php' ?>

                  <main>
                    <div class="container-fluid px-4">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mt-3 fw-bold">Dashboard</li>
                        </ol>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body fw-bold"><i class="fa fa-folder"></i> CATEGORIES <span class="float-end" style="transform:scale(1.4);">
                                    <?php 
                                        include 'config/config.php';
                                       $result = $conn->query("select * from blog_category");
                                       $count=$result->num_rows;
                                       echo "$count";
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="blog-category.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body fw-bold"><i class="fa fa-edit"></i> POST <span  class="float-end" style="transform:scale(1.4);">
                                        <?php 
                                        include 'config/config.php';
                                       $result = $conn->query("select * from blog");
                                       $count=$result->num_rows;
                                       echo "$count";
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="manage-post.php" > View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                         <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body fw-bold"><i class="fa fa-edit"></i> ENQUIRY <span  class="float-end" style="transform:scale(1.4);">
                                        <?php 
                                        include 'config/config.php';
                                       $result = $conn->query("select * from contact_us");
                                       $count=$result->num_rows;
                                       echo "$count";
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link text-decoration-none" href="contact.php"> View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </main>   
      <?php include  'includes/footer.php' ?>
        