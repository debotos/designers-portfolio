<?php 
  if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
  }else {
    if(isset($_GET['what_i_do_delete'])){
      $delete_id = $_GET['what_i_do_delete'];
      $delete_user = "DELETE FROM `whai_i_do` WHERE `whai_i_do`.`id` = $delete_id";
      $run_delete = mysqli_query($con, $delete_user);
      if($run_delete){
      echo "<script>window.open('index.php?what_i_do','_self')</script>";
      }
    }
  }
?>
