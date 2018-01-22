<?php
if(!isset($_SESSION['admin_email'])){
  echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['design_delete'])){
  $delete_id = $_GET['design_delete'];
  $design_image = $_GET['image'];
  $design_delete_query = "delete from design where id='$delete_id'";
  $run_delete = mysqli_query($con, $design_delete_query);
    if($run_delete){
      $filename = "assets/img/design/$design_image";
      unlink($filename);
      echo "<script>window.open('index.php?all_designs','_self')</script>";
    }
  }
}
?>
