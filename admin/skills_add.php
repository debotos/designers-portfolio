<?php 
  if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
  }else {
    if(isset($_POST['submit'])){
      $skills_name = $_POST['skills_name'];
      $skills_percentage = $_POST['skills_precentage'];
      $add_skills_name_query = "INSERT INTO `skills` (`name`, `percentage`) VALUES ('$skills_name', '$skills_percentage')";
      
      $skills_percentage_int = intval($skills_percentage);
      if($skills_percentage_int > 100 || $skills_percentage_int < 10){
        echo "<script>alert('Error! Maximum percentage value is 100 and Minimum is 10!')</script>";
        echo "<script>window.open('index.php?skills','_self')</script>";
      }else{
        $add_skills_name = mysqli_query($con, $add_skills_name_query);
        if($add_skills_name){
        echo "<script>window.open('index.php?skills','_self')</script>";
        }
      }
      
    }
  }
?>
