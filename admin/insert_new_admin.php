<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <section class="content">
    <div class="page-announce valign-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
        <i class="material-icons">menu
      </i>
      </a>
      <h1 class="page-announce-text valign">Add New Admin 
    </h1>
    </div>
    <!--Main coading of Insert New Admin Start-->
    <div class="row">
      <!-- Main row Starts -->
      <form class="col s12" method="post" enctype="multipart/form-data" action="">
        <!-- form Starts -->
        <div class="row">
          <div class="input-field col s12">
            <input id="admin_name" type="text" name="admin_name" class="validate" required>
            <label for="admin_name">Admin Name
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="admin_email" type="email" name="admin_email" class="validate" required>
            <label for="admin_email" data-error="wrong" data-success="right">Admin Email
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="admin_pass" type="password" name="admin_pass" class="validate" required>
            <label for="admin_pass">Admin Password
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="admin_contact" type="text" name="admin_contact" class="validate" required>
            <label for="admin_contact">Admin Contact
            </label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <div class="file-field input-field">
              <div class="btn">
                <span>Admin Image</span>
                <input type="file" name="admin_image" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
        </div>

        <div style="display: flex; justify-content: center;">
          <!-- col-md-6 Starts -->
          <button type="submit" name="submit" class="btn waves-effect waves-light">
            Insert Admin
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <!-- form Ends -->
    </div>
    <!-- Main row Ends -->
    <?php
if(isset($_POST['submit'])){
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_pass = $_POST['admin_pass'];
  $admin_contact = $_POST['admin_contact'];
  $admin_image = $_FILES['admin_image']['name'];
  $temp_admin_image = $_FILES['admin_image']['tmp_name'];
  $file_type = $_FILES['admin_image']['type'];  
  $allowed = array("image/jpeg", "image/gif", "image/png");

  $query_email_exist = "SELECT * FROM `admins` WHERE admin_email='$admin_email'";
  $run_query_email_exist = mysqli_query($con, $query_email_exist);
  $mail_count = mysqli_num_rows($run_query_email_exist);

  if($mail_count > 0) {
    echo "<script>alert('Sorry! Email Already Exist!')</script>";
    echo "<script>window.open('index.php?insert_new_admin','_self')</script>";
  }else{
    if(!in_array($file_type, $allowed)) {
    echo "<script>alert('Only jpg, gif, and png files are allowed!')</script>";
    echo "<script>window.open('index.php?insert_new_admin','_self')</script>";
    }else{
      move_uploaded_file($temp_admin_image,"assets/img/admin/$admin_image");
      $insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact')";
      $run_admin = mysqli_query($con,$insert_admin);
      if($run_admin){
        echo "<script>window.open('index.php?view_admins','_self')</script>";
      }
    }
  }
}
?>
      <!--Main coading of Insert New Admin Ends-->
  </section>
  <?php }  ?>
