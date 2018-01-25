<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <section class="content">
    <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
      <h1 class="page-announce-text valign">Add Testimonial</h1>
    </div>
    <!--Main coading of Testimonial Add Start-->
    <div class="row">
      <!-- Main row Starts -->
      <form class="col s12" method="post" enctype="multipart/form-data" action="">
        <!-- form Starts -->
        <div class="row">
          <div class="input-field col s12">
            <input id="testimonial_name" type="text" name="testimonial_name" class="validate" required>
            <label for="testimonial_name">Who Give It(Name)
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="testimonial_job" type="text" name="testimonial_job" class="validate" required>
            <label for="testimonial_job">His/Her Job Position
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="testimonial_rating" type="text" name="testimonial_rating" required>
            <label for="testimonial_rating">Rating (ex: 4.5, Max: 5)
            </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="testimonial_body" name="testimonial_body" class="materialize-textarea" required></textarea>
            <label for="testimonial_body">Testimonial Body
            </label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <div class="file-field input-field">
              <div class="btn">
                <span>His/Her Image</span>
                <input type="file" name="testimonial_image" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
        </div>

        <div style="display: flex; justify-content: center;">
          <!-- col-md-6 Starts -->
          <button type="submit" name="submit" class="btn waves-effect waves-light">
            Add Testimonial
            <i class="material-icons right">face</i>
          </button>
        </div>
      </form>
      <!-- form Ends -->
    </div>
    <!-- Main row Ends -->
    <?php
if(isset($_POST['submit'])){
$testimonial_name = $_POST['testimonial_name'];
$testimonial_job = $_POST['testimonial_job'];
$testimonial_rating = $_POST['testimonial_rating'];
$testimonial_body = $_POST['testimonial_body'];
$testimonial_image = uniqid()."_".$_FILES['testimonial_image']['name'];
$temp_testimonial_image = $_FILES['testimonial_image']['tmp_name'];
  
$file_type = $_FILES['testimonial_image']['type'];  
$allowed = array("image/jpeg", "image/gif", "image/png");
  
if(!in_array($file_type, $allowed)) {
  echo "<script>alert('Only jpg, gif, and png files are allowed!')</script>";
  echo "<script>window.open('index.php?testimonial_add','_self')</script>";
}else{
  if(intval($testimonial_rating) > 5 || intval($testimonial_rating) < 1){
  echo "<script>alert('Error! Valid rating please!')</script>";
  }else{
    move_uploaded_file($temp_testimonial_image,"assets/img/testimonial/$testimonial_image");
    $insert_testimonial = "INSERT INTO `testimonial` (`name`, `image`, `position`, `star`, `description`) VALUES ('$testimonial_name', '$testimonial_image', '$testimonial_job', '$testimonial_rating', '$testimonial_body');";
    $run_testimonial = mysqli_query($con,$insert_testimonial);
    if($run_testimonial){
      echo "<script>window.open('index.php?testimonial_list','_self')</script>";
    }
  }
}

}
?>
      <!--Main coading of Testimonial Add Ends-->
  </section>
  <?php } ?>