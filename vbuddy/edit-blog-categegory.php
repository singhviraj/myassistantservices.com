<?php include  'includes/header.php'; include 'security.php'; ?>
<?php include  'includes/top-navbar.php' ?>
<?php include  'includes/side-menu.php' ?>

<main>
                    <div class="container-fluid px-4">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mt-3 fw-bold">BLOG</li>
                        </ol>
                        <div class="row">
                        <div class="card mb-4">
                        <?php if(isset($_SESSION['error']) && $_SESSION['error'] != ''){
                                ?>
                      <div class="alert alert-warning alert-dismissible fade show fw-bold text-danger" role="alert">
                        <?php echo $_SESSION['error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                                <?php
                                unset($_SESSION['message']);
                           } ?>
                            <div class="card-header bg-danger fw-bold text-white">
                                
                                <i class="fas fa-table me-1"></i>
                                UPDATE CATEGORY
                                <a href="blog-category.php" class="btn btn-dark float-end btn-sm fw-bold"><i class="fa-solid fa-chevron-left"></i>  BACK</a>
                            </div>
                            <div class="card-body">

                            <?php 
                                        
                                        include 'config/config.php';
                                        $cat_id  = $_GET['id'];
                                        $query = "SELECT * FROM blog_category WHERE cat_id = $cat_id";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0){

                                           foreach($query_run as $row){

                                            
                                            ?>
                                                <form action="request/blog.php" method="post">
                                    <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['cat_name']; ?>" required>
                                        <input type="hidden" name="cat_id" class="form-control" value="<?php echo $row['cat_id']; ?>" required>
                                   
                                    </div>

                                    <div class="mb-3 3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Slug(URL)</label>
                                        <input type="text" name="slug" class="form-control" value="<?php echo $row['cat_slug']; ?>" required>
                                    </div>
                                    </div>
                                  <div class="row">
                                    <div class="mb-3 col-md-6">
                                    
                                        <label for="" class="form-label fw-bold">Status</label><br>
                                        <input type="checkbox" name="cat_status" <?php echo $row['cat_status'] == 1 ? 'checked': ''; ?> width="70px" height="70px">
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_cat_btn" class="btn btn-danger">Update Category</button>
                                    </div>
                                    
                                </form>

                                <?php
                                           }
                                        }
                                        
                                        
                                        ?>
                            
                            </div>
                        </div>
                        </div>
                    </div>
</main>

<?php include  'includes/footer.php' ?>