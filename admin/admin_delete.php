<?php
if(!isset($_SESSION['admin_email'])){
  echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['admin_delete'])){
  $delete_id = $_GET['admin_delete'];
  $admin_image = $_GET['image'];
  $delete_user = "delete from admins where admin_id='$delete_id'";
  $run_delete = mysqli_query($con,$delete_user);
    if($run_delete){
      $filename = "assets/img/admin/$admin_image";
      unlink($filename);
      echo "<script>window.open('index.php?view_admins','_self')</script>";
    }
  }
}
?>