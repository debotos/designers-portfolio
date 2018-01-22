<?php 
  if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
  }else {
    if(isset($_POST['submit'])){
      $category_name = $_POST['category_name'];
      $add_category_name_query = "INSERT INTO `category` (`category_name`) VALUES ('$category_name')";
      $add_category_name = mysqli_query($con, $add_category_name_query);
      if($add_category_name){
      echo "<script>window.open('index.php?design_category','_self')</script>";
      }
    }
  }
?>
