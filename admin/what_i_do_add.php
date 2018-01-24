<?php 
  if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
  }else {
    if(isset($_POST['submit'])){
      $what_i_do_name = $_POST['what_i_do_name'];
      $what_i_do_icon = $_POST['what_i_do_icon'];
      $what_i_do_info = $_POST['what_i_do_info'];
      
      $add_what_i_do_query = "INSERT INTO `whai_i_do` (`name`, `icon`, `info`) VALUES ('$what_i_do_name', '$what_i_do_icon', '$what_i_do_info');";
      $add_what_i_do = mysqli_query($con, $add_what_i_do_query);
      if($add_what_i_do){
      echo "<script>window.open('index.php?what_i_do','_self')</script>";
      }
    }
  }
?>
