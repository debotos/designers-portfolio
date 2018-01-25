<?php
session_start();
include("includes/db.php");
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <!--Getting the user details Starts-->
  <?php

  $admin_session = $_SESSION['admin_email'];

  $get_admin = "select * from admins  where admin_email='$admin_session'";

  $run_admin = mysqli_query($con,$get_admin);

  $row_admin = mysqli_fetch_array($run_admin);

  $admin_id = $row_admin['admin_id'];

  $admin_name = $row_admin['admin_name'];

  $admin_email = $row_admin['admin_email'];

  $admin_image = $row_admin['admin_image'];

  $admin_contact = $row_admin['admin_contact'];

//  $get_products = "select * from products";
//  $run_products = mysqli_query($con,$get_products);
//  $count_products = mysqli_num_rows($run_products);

?>
    <!--Getting the user details Ends-->
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="UTF-8">
      <title>Control Panel of <?php echo $admin_name;?></title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
      <!--sidebar Navigation Starts-->
      <?php include('includes/sidebar.php'); ?>
        <!--sidebar Navigation Ends-->

        <main>

          <?php 
          
          if(isset($_GET['dashboard'])) {
            include('dashboard.php');
          }
          
          if(isset($_GET['insert_new_admin'])) {
            include('insert_new_admin.php');
          }
          
          if(isset($_GET['view_admins'])) {
            include('view_admins.php');
          }
  
          if(isset($_GET['edit_admin_profile'])) {
            include('edit_admin_profile.php');
          }
          
          if(isset($_GET['admin_delete'])){
            include("admin_delete.php");
          }
  
          if(isset($_GET['design_category'])){
            include("design_category.php");
          }
          
          if(isset($_GET['category_delete'])){
            include("category_delete.php");
          }
          
          if(isset($_GET['category_add'])){
            include("category_add.php");
          }
          
          if(isset($_GET['all_designs'])){
            include("all_designs.php");
          }
  
          if(isset($_GET['design_delete'])){
            include("design_delete.php");
          }
  
          if(isset($_GET['design_edit'])){
            include("design_edit.php");
          }
  
          if(isset($_GET['add_design'])){
            include("add_design.php");
          }
          
          if(isset($_GET['social_link_info'])){
            include("social_link_info.php");
          }
  
          if(isset($_GET['testimonial_add'])){
            include("testimonial_add.php");
          }
  
          if(isset($_GET['testimonial_list'])){
            include("testimonial_list.php");
          }
          
          if(isset($_GET['testimonial_edit'])){
            include("testimonial_edit.php");
          }
  
          if(isset($_GET['testimonial_delete'])){
            include("testimonial_delete.php");
          }
  
          if(isset($_GET['about'])){
            include("about.php");
          }
  
          if(isset($_GET['messages'])){
            include("messages.php");
          }
  
          if(isset($_GET['messages_delete'])){
            include("messages_delete.php");
          }
  
          if(isset($_GET['skills'])){
            include("skills.php");
          }
  
          if(isset($_GET['skills_delete'])){
            include("skills_delete.php");
          }
          
          if(isset($_GET['skills_add'])){
            include("skills_add.php");
          }
  
          if(isset($_GET['what_i_do'])){
            include("what_i_do.php");
          }
  
          if(isset($_GET['what_i_do_add'])){
            include("what_i_do_add.php");
          }
  
          if(isset($_GET['what_i_do_delete'])){
            include("what_i_do_delete.php");
          }
  
          if(isset($_GET['what_i_do_edit'])){
            include("what_i_do_edit.php");
          }
          

        ?>

        </main>
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container" style="text-align: center;">
              ©
              <?php echo date("Y"); ?> All rights reserved by <?php echo $admin_name;?>.
            </div>
          </div>
        </footer>

        <!-- So this is basically a hack, until I come up with a better solution. autocomplete is overridden
        in the materialize js file & I don't want that.
        -->
        <!-- Yo dawg, I heard you like hacks. So I hacked your hack. (moved the sidenav js up so it actually works) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script>
          // Hide sideNav
          $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
          });
          $(document).ready(function() {
            $('.tooltipped').tooltip({
              delay: 50
            });
          });
          $('select').material_select();
          $('.collapsible').collapsible();
//          $('select').material_select('destroy');
        </script>
        <script src="../js/jquery-3.2.1.min.js"></script>
    </body>

    </html>
    <?php } ?>
