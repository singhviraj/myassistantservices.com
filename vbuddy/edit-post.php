<?php 

include  'includes/header.php'; 
include  'security.php';
include 'config/config.php';

?>
<?php include  'includes/top-navbar.php' ?>
<?php include  'includes/side-menu.php' ?>

<main>
                    <div class="container-fluid px-4">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mt-3 fw-bold">BLOG</li>
                        </ol>
                        <div class="row">
                        <div class="card mb-4">

                            <div class="card-header bg-danger fw-bold text-white">
    
                                <i class="fas fa-table me-1"></i>
                                ADD POST
                                <a href="manage-post.php" class="btn btn-dark float-end btn-sm fw-bold"><i class="fa-solid fa-chevron-left"></i>  BACK</a>
                            </div>
                            <div class="card-body">

                              <?php
                                     $id =  $_GET['id'];

                                        $blog_query = "SELECT * FROM blog WHERE id = $id";
                                        $blog_query_run = mysqli_query($conn, $blog_query);
                                        if(mysqli_num_rows($blog_query_run) > 0){
                                            
                                            foreach($blog_query_run as $row){
                                                ?>
                                               
                                               <form action="request/blog.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                        <label for="" class="form-label fw-bold">Category List</label>
                                        <select class="form-select" name="category_id" aria-label="Default select example">
                                        <?php 
                            
                                        $query = "SELECT * FROM blog_category WHERE cat_status = 1";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0){
                                            
                                            foreach($query_run as $data){
                                                ?>
                                            <option value="<?php echo $data['cat_id']; ?>"><?php echo $data['cat_name']; ?></option>
                                           
                                    
                                                <?php
                                          }
                                        }      
                                        ?>
                                          </select>
                                    </div>
                                    <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['title'] ?>">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
                                    
                                    </div>

                                    <div class="mb-3 3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Slug(URL)</label>
                                        <input type="text" name="slug" class="form-control" value="<?php echo $row['slug'] ?>">
                                    </div>
                                    </div>

        
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">Body</label>
                                        <textarea name="body" cols="30" id="summernote" class="form-control" rows="10"><?php echo $row['body']?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="<?php echo $row['meta_title'] ?>">
                                    </div>
                                    <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Meta Description</label>
                                        <textarea name="meta_description" id="" cols="30" class="form-control" rows="5">
                                        <?php echo $row['meta_description'] ?>
                                        </textarea>
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="name" class="form-label fw-bold">Meta Keywords</label>
                                        <textarea name="meta_keywords" id="" cols="30" class="form-control" rows="5">
                                        <?php echo $row['meta_keywords'] ?>
                                        </textarea>
                                    </div>
                                    </div>
                                  <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="uploadFile" class="form-label fw-bold">Upload Image</label>
                                        <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>" class="form-control">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    
                                        <label for="" class="form-label fw-bold">Status</label><br>
                                        <input class="form-check-input" type="checkbox" name="status" <?php echo $row['status'] == 1 ? 'checked':''; ?> width="70px" height="70px">
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_btn" class="btn btn-danger">Update Post</button>
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