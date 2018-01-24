<?php
if(!isset($_SESSION['admin_email'])){
  echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['messages_delete'])){
  $delete_id = $_GET['messages_delete'];
  $messages_delete_query = "delete from message where id='$delete_id'";
  $run_delete = mysqli_query($con, $messages_delete_query);
    if($run_delete){
      echo "<script>window.open('index.php?messages','_self')</script>";
    }
  }
}
?>
