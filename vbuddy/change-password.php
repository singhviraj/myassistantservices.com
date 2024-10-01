<?php include  'includes/header.php'; 
include  'security.php'; ?>
<?php include  'includes/top-navbar.php' ?>
<?php include  'includes/side-menu.php' ?>

<main>

<div class="container px-4">
<ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mt-3 fw-bold">Change Password</li>
                        </ol>
<div class="row">
    <div class="col-md-6 offset-md-2">
      <?php 
      if(isset($_SESSION['message']) && $_SESSION['message'] !=''){
        echo '<p class="text-success message">'.$_SESSION['message'].'</p>';

        unset($_SESSION['message']);
      }
      if(isset($_SESSION['error']) && $_SESSION['error'] !=''){
        echo '<p class="text-danger error">'.$_SESSION['error'].'</p>';

        unset($_SESSION['error']);
      }

      
      ?>
        <div class="card">
            <div class="card-header bg-danger text-white">
              <h5 >Change Password </h5>
            </div>
            <div class="card-body">
                <form action="request/change-password.php" method="post">
                    <div class="mb-3">
                       <input type="password" name="old_password" class="form-control" placeholder="Enter Old Password" required>
                    </div>
                    <div class="mb-3">
                       <input type="password" name="new_password" class="form-control" id="myInput" placeholder="Enter new password" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" onclick="myFunction()" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Show Password 
                        </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="update_password" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

</div>

</main>
<?php include 'includes/footer.php'; ?>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


$(".message").show().delay(3000).queue(function(n) {
  $(this).fadeOut(); n();
});

$(".error").show().delay(3000).queue(function(n) {
  $(this).fadeOut(); n();
});
</script>