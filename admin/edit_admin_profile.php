<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<?php
if(isset($_GET['edit_admin_profile'])){
$edit_id = $_GET['edit_admin_profile'];
$get_admin = "select * from admins where admin_id='$edit_id'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_pass = $row_admin['admin_pass'];
$admin_image = $row_admin['admin_image'];
$new_admin_image = $row_admin['admin_image'];
$admin_contact = $row_admin['admin_contact'];
}
?>
<section class="content">
  <div class="page-announce valign-wrapper">
    <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
      <i class="material-icons">menu
      </i>
    </a>
    <h1 class="page-announce-text valign">Edit Profile 
    </h1>
  </div>
  <!--Main coading of Edit Admin Profile Start-->
  <div class="row">
    <!-- Main row Starts -->
    <form class="col s12" method="post" enctype="multipart/form-data" action="">
      <!-- form Starts -->
      <div class="row">
        <div class="input-field col s12">
          <input id="admin_name" type="text" name="admin_name" class="validate" value="<?php echo $admin_name; ?>" required>
          <label for="first_name">Admin Name
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="admin_pass" type="password" name="admin_pass" class="validate" required>
          <label for="first_name">Admin Password
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="admin_contact" type="text" name="admin_contact" class="validate" value="<?php echo $admin_contact; ?>" required>
          <label for="first_name">Admin Contact
          </label>
        </div>
      </div>
      <div class="row" style="display: flex; flex-direction: row;">
        <img src="assets/img/admin/<?Php echo $admin_image; ?>" width="70" height="70" style="margin-left: 9px; margin-right: 5px;">
        <div class="file-field input-field" style="width: 100%; margin-right: 9px;">
          <div class="btn">
            <span>
              <i class="material-icons">perm_media
              </i>
            </span>
            <input type="file" name="admin_image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <!-- col-md-6 Starts -->
        <button type="submit" name="update" class="btn waves-effect waves-light">
          Update
          <i class="material-icons right">update
          </i>
        </button>
      </div>
    </form>
    <!-- form Ends -->
  </div>
  <!-- Main row Ends -->
  <!--Main coading of Edit Admin Profile Ends-->
</section>
<?php
  if(isset($_POST['update'])){
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    $admin_contact = $_POST['admin_contact'];
    $admin_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    $file_type = $_FILES['admin_image']['type'];  
    $allowed = array("image/jpeg", "image/gif", "image/png");

    if(!empty($admin_image)){
      if(!in_array($file_type, $allowed)) {
      echo "<script>alert('Only jpg, gif, and png files are allowed!')</script>";
      echo "<script>window.open('index.php?edit_admin_profile=$edit_id','_self')</script>";
      }else{
        move_uploaded_file($temp_admin_image,"assets/img/admin/$admin_image");
        if(empty($admin_image)){
          $admin_image = $new_admin_image;
        }else{
          $filename = "assets/img/admin/$new_admin_image";
          unlink($filename);  
        }
        $update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_image='$admin_image',admin_contact='$admin_contact' where admin_id='$admin_id'";
        $run_admin = mysqli_query($con,$update_admin);
        if($run_admin){
        echo "<script>alert('User Has Been Updated successfully and login again')</script>";
        echo "<script>window.open('login.php','_self')</script>";
        session_destroy();
        }
      }
    }else{
      move_uploaded_file($temp_admin_image,"assets/img/admin/$admin_image");
      if(empty($admin_image)){
        $admin_image = $new_admin_image;
      }else{
        $filename = "assets/img/admin/$new_admin_image";
        unlink($filename);  
      }
      $update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_image='$admin_image',admin_contact='$admin_contact' where admin_id='$admin_id'";
      $run_admin = mysqli_query($con,$update_admin);
      if($run_admin){
      echo "<script>alert('User Has Been Updated successfully and login again')</script>";
      echo "<script>window.open('login.php','_self')</script>";
      session_destroy();
    } 
  }
}
?>
<?php }  ?>
