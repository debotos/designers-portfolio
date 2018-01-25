<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['testimonial_edit'])){
    $testimonial_edit_id = $_GET['testimonial_edit'];
    $main_testimonial_query = "SELECT * FROM `testimonial` WHERE id=$testimonial_edit_id";
    $result_main_testimonial_query = mysqli_query($con, $main_testimonial_query);
    $result_array = mysqli_fetch_array($result_main_testimonial_query);
    
    $testimonial_name = $result_array['name'];
    $current_testimonial_image = $result_array['image'];
    $new_testimonial_image = $result_array['image'];
    $testimonial_position = $result_array['position'];
    $testimonial_star = $result_array['star'];
    $testimonial_description = $result_array['description'];
  }
?>
<section class="content">
  <div class="page-announce valign-wrapper">
    <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
      <i class="material-icons">menu
      </i>
    </a>
    <h1 class="page-announce-text valign">Edit Testimonial 
    </h1>
  </div>
  <!--Main coading of Testimonial Edit Start-->
  <div class="row">
    <!-- Main row Starts -->
    <form class="col s12" method="post" enctype="multipart/form-data" action="">
      <!-- form Starts -->
      <div class="row">
        <div class="input-field col s12">
          <input id="testimonial_name" type="text" name="testimonial_name" class="validate" value="<?php echo $testimonial_name; ?>" required>
          <label for="testimonial_name">Who Give It(Name)
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="testimonial_job" type="text" name="testimonial_job" class="validate" value="<?php echo $testimonial_position; ?>" required>
          <label for="testimonial_job">His/Her Job Position
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="testimonial_rating" type="text" name="testimonial_rating" value="<?php echo $testimonial_star; ?>" required>
          <label for="testimonial_rating">Rating (ex: 4.5, Max: 5)
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="testimonial_body" name="testimonial_body" class="materialize-textarea" required>
            <?php echo $testimonial_description; ?>
          </textarea>
          <label for="testimonial_body">Testimonial Body
          </label>
        </div>
      </div>
      <div class="row" style="display: flex; flex-direction: row;">
       <img src="assets/img/testimonial/<?Php echo $current_testimonial_image; ?>" width="70" height="70" style="margin-left: 9px; margin-right: 5px;">
        <div class="input-field col s12">
          <div class="file-field input-field">
            <div class="btn">
              <span>Change Image
              </span>
              <input type="file" name="testimonial_image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <!-- col-md-6 Starts -->
        <button type="submit" name="update" class="btn waves-effect waves-light">
          Update Testimonial
        </button>
      </div>
    </form>
    <!-- form Ends -->
  </div>
  <!-- Main row Ends -->
  <?php
  if(isset($_POST['update'])){
    $testimonial_name = $_POST['testimonial_name'];
    $testimonial_job = $_POST['testimonial_job'];
    $testimonial_rating = $_POST['testimonial_rating'];
    $testimonial_body = $_POST['testimonial_body'];
    $testimonial_image = $_FILES['testimonial_image']['name'];
    $temp_testimonial_image = $_FILES['testimonial_image']['tmp_name'];
    $file_type = $_FILES['testimonial_image']['type'];  
    $allowed = array("image/jpeg", "image/gif", "image/png");
    
    if(!empty($testimonial_image)){
      if(!in_array($file_type, $allowed)) {
      echo "<script>alert('Only jpg, gif, and png files are allowed!')</script>";
      echo "<script>window.open('index.php?testimonial_edit=$testimonial_edit_id','_self')</script>";
      }else{
        if(intval($testimonial_rating) > 5 || intval($testimonial_rating) < 1){
          echo "<script>alert('Error! Valid rating please!')</script>";
          echo "<script>window.open('index.php?testimonial_edit=$testimonial_edit_id','_self')</script>";
        }else{
          move_uploaded_file($temp_testimonial_image,"assets/img/testimonial/$testimonial_image");
          if(empty($testimonial_image)){
            $testimonial_image = $new_testimonial_image;
          }else{
            $filename = "assets/img/testimonial/$new_testimonial_image";
            unlink($filename);  
          }
          $update_testimonial = "UPDATE `testimonial` SET `name` = '$testimonial_name', `image` = '$testimonial_image', `position` = '$testimonial_job', `star` = '$testimonial_rating', `description` = '$testimonial_body' WHERE `testimonial`.`id` = $testimonial_edit_id";
          $run_testimonial = mysqli_query($con, $update_testimonial);
          if($run_testimonial){
            echo "<script>window.open('index.php?testimonial_list','_self')</script>";
          }
        }
      }
    }else{
      if(intval($testimonial_rating) > 5 || intval($testimonial_rating) < 1){
        echo "<script>alert('Error! Valid rating please!')</script>";
        echo "<script>window.open('index.php?testimonial_edit=$testimonial_edit_id','_self')</script>";
      }else{
        move_uploaded_file($temp_testimonial_image,"assets/img/testimonial/$testimonial_image");
        if(empty($testimonial_image)){
          $testimonial_image = $new_testimonial_image;
        }else{
          $filename = "assets/img/testimonial/$new_testimonial_image";
          unlink($filename);  
        }
        $update_testimonial = "UPDATE `testimonial` SET `name` = '$testimonial_name', `image` = '$testimonial_image', `position` = '$testimonial_job', `star` = '$testimonial_rating', `description` = '$testimonial_body' WHERE `testimonial`.`id` = $testimonial_edit_id";
        $run_testimonial = mysqli_query($con, $update_testimonial);
        if($run_testimonial){
          echo "<script>window.open('index.php?testimonial_list','_self')</script>";
        }
      }
    }
    
  }
?>
  <!--Main coading of Testimonial Edit Ends-->
</section>
<?php } ?>
