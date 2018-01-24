<?php 
  if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
  }else {
    if(isset($_GET['skills_delete'])){
      $delete_id = $_GET['skills_delete'];
      $delete_user = "delete from skills where id='$delete_id'";
      $run_delete = mysqli_query($con, $delete_user);
      if($run_delete){
      echo "<script>window.open('index.php?skills','_self')</script>";
      }
    }
  }
?>
