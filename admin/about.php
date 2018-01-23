<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
  $query_to_get_about = "SELECT * FROM `about`";
  $run_qurey_for_about = mysqli_query($con, $query_to_get_about);
  $about_query_result = mysqli_fetch_array($run_qurey_for_about);
  
  $first_name_db = $about_query_result['first_name'];
  $full_name_db = $about_query_result['full_name'];
  $who_am_i_db = $about_query_result['who_am_i'];
  
?>
 <section class="content">
  <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
    <h1 class="page-announce-text valign">About You </h1>
  </div>
  <!--Main coading of About page Start-->
   <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 3%;">
     <!--first_name-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;">
         <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-user fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $first_name_db; ?>" id="first_name" name="first_name" type="text" class="validate" required>
            <label for="first_name">Your First Name</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_first_name" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./first_name-->
      
      <!--full_name-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;">
         <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-male fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $full_name_db; ?>" id="full_name" name="full_name" type="text" class="validate" required>
            <label for="full_name">Your Full Name</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_full_name" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./full_name-->
      
      <!--who_am_i-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;">
         <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <textarea id="who_am_i" name="who_am_i" type="text" class="materialize-textarea" required><?php echo $who_am_i_db; ?></textarea>
            <label for="who_am_i">Describe Yourself (who am i)</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_who_am_i" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./who_am_i-->
   </div>
  <!--Main coading of About page Ends-->
  <!--Form Submit Handling-->
    <?php 
      // first_name
      if(isset($_POST['submit_first_name'])){
        $first_name_update = $_POST['first_name'];
        
        $update_about = "UPDATE `about` SET `first_name` = '$first_name_update' WHERE `about`.`id` = 1";
        $run_update_about = mysqli_query($con, $update_about);
        if($run_update_about){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?about','_self')</script>";
        }
      }
  
      // full_name
      if(isset($_POST['submit_full_name'])){
        $full_name_update = $_POST['full_name'];
        
        $update_about = "UPDATE `about` SET `full_name` = '$full_name_update' WHERE `about`.`id` = 1";
        $run_update_about = mysqli_query($con, $update_about);
        if($run_update_about){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?about','_self')</script>";
        }
      }
  
      // who_am_i
      if(isset($_POST['submit_who_am_i'])){
        $who_am_i_update = $_POST['who_am_i'];
        
        $update_about = "UPDATE `about` SET `who_am_i` = '$who_am_i_update' WHERE `about`.`id` = 1";
        $run_update_about = mysqli_query($con, $update_about);
        if($run_update_about){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?about','_self')</script>";
        }
      }
    ?>
</section>
<?php } ?>