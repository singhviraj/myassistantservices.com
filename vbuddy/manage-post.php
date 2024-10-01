<?php include  'includes/header.php'; include  'security.php'; ?>
<?php include  'includes/top-navbar.php'; ?>
<?php include  'includes/side-menu.php'; ?>

<main>

                    <div class="modal" id="deleteModel" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                        <div class="modal-header bg-danger text-white fw-bold">
                        Delete Post
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="request/blog.php" method="POST">
                        <div class="modal-body">
                            <p>Are you sure, want to delete this Post ?</p>
                            <input type="hidden" name="post_delete" class="delete_cat_id" id="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" name="post_delete_btn" class="btn btn-danger">Yes Delete</button>
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
                                unset($_SESSION['error']);
                           } ?>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-danger fw-bold text-white">
                                
                                <i class="fas fa-table me-1"></i>
                                MANAGE POST
                                <a href="add-post.php" class="btn btn-dark float-end btn-sm fw-bold"><i class="fa fa-plus"></i> ADD POST</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SI.NO</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php 
                                        
                                        include 'config/config.php';
                                        
                                        $query = "SELECT * FROM blog INNER JOIN blog_category ON blog.cate_id = blog_category.cat_id";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0){
                                             $i = 0;
                                            foreach($query_run as $data)
                                            {
                                                $i++;
                                                ?>

<tr>
                                            <td><?php echo $i; ?></td>
                                            <td> <?php echo $data['title'] ?></td>
                                            <td> <?php echo $data['cat_name'] ?></td>
                                            <td> <?php echo $data['status']  == 1 ? '<span class="text-success fw-bold">Active</span>':'<span class="text-danger fw-bold">Deactive</span>'; ?></td>
                                            <td><a href="edit-post.php?id=<?php echo $data['id']; ?>"><i class="fa fa-edit text-primary"></i></a></td>
                                            <td><button type="button" class=" btn delete_btn" value="<?php echo $data['id']; ?>"><i class="fa fa-trash text-danger"></i> </button> </td>
                                        </tr>

                                                <?php

                                            }
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