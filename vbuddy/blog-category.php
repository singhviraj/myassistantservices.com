<?php include  'includes/header.php'; include 'security.php'; ?>
<?php include  'includes/top-navbar.php' ?>
<?php include  'includes/side-menu.php' ?>

                  <main>


<div class="modal" id="deleteModel" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white fw-bold">
       Delete Category
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="request/blog.php" method="POST">
      <div class="modal-body">
        <p>Are you sure, want to delete this data ?</p>
        <input type="hidden" name="category_delete" class="delete_cat_id" id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" name="delete_btn" class="btn btn-danger">Yes Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

                    <div class="container-fluid px-4">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mt-3 fw-bold">BLOG</li>
                        </ol>
                        <div class="row">
                           <?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show fw-bold text-success" role="alert">
                                <?php echo $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                                <?php
                                unset($_SESSION['message']);
                           } ?>

                          <?php if(isset($_SESSION['error']) && $_SESSION['error'] != ''){
                                ?>
                      <div class="alert alert-warning alert-dismissible fade show fw-bold text-danger" role="alert">
                        <?php echo $_SESSION['error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                                <?php
                                unset($_SESSION['message']);
                           } ?>
                        

                        <div class="card mb-4">
                            <div class="card-header bg-danger fw-bold text-white">
                                
                                <i class="fas fa-table me-1"></i>
                                MANAGE CATEGORY
                                <a href="add-blog-category.php" class="btn btn-dark float-end btn-sm fw-bold"><i class="fa fa-plus"></i> ADD CATEGORY</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SI.NO</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php 
                                        
                                        include 'config/config.php';
                                        
                                        $query = "SELECT * FROM blog_category";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0){
                                             $i = 0;
                                            foreach($query_run as $data){
                                                $i++;
                                                ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data['cat_name'] ?></td>
                                            <td><?php echo $data['cat_slug'] ?></td>
                                            <td><?php echo $data['cat_status'] == 1 ? '<span class="fw-bold text-success">Active</span>':'<span class="text-danger fw-bold">Deactive</span>'; ?></td>
                                            <td><a href="edit-blog-categegory.php?id=<?php echo $data['cat_id']; ?>"><i class="fa fa-edit text-primary"></i></a></td>
                                         <td><button type="button" class=" btn delete_btn" value="<?php echo $data['cat_id']; ?>"><i class="fa fa-trash text-danger"></i> </button> </td>
                                        </tr>
                                                    
                                                <?php

                                            }

                                        }
                                        else{
                                            echo "No Data Found";
                                        }
                                        ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
</main>

<?php include  'includes/footer.php' ?>
<script>
    $(document).ready(function(){
      
       
        $('.delete_btn').click(function(){
           
            var id = $(this).val();
            
            $('.delete_cat_id').val(id);
            $('#deleteModel').modal('show');
        
        });

    });
</script>