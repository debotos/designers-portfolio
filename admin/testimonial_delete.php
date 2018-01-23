<?php
if(!isset($_SESSION['admin_email'])){
  echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['testimonial_delete'])){
  $delete_id = $_GET['testimonial_delete'];
  $testimonial_image = $_GET['image'];
  $testimonial_delete_query = "delete from testimonial where id='$delete_id'";
  $run_delete = mysqli_query($con, $testimonial_delete_query);
    if($run_delete){
      $filename = "assets/img/testimonial/$testimonial_image";
      unlink($filename);
      echo "<script>window.open('index.php?testimonial_list','_self')</script>";
    }
  }
}
?>
