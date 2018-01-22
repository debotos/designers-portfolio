<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
  <section class="content">
    <div class="page-announce valign-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
        <i class="material-icons">menu
      </i>
      </a>
      <h1 class="page-announce-text valign">Add New Design
      </h1>
    </div>
    <!--Main coading of Insert New design Start-->
    <div class="row">
      <!-- Main row Starts -->
      <form class="col s12" method="post" enctype="multipart/form-data" action="">
        <!-- form Starts -->
        <div class="row">
          <div class="input-field col s12">
            <select name="category" class="browser-default">
              <option value="" disabled selected>Choose your Design category</option>
              <?php 
                $query = "SELECT * FROM `category`";
                $run_query = mysqli_query($con, $query);
                $result = "";
                while($row = mysqli_fetch_array($run_query)){
                  $id = $row['id'];
                  $category = $row['category_name'];
                  $result .= "<option value='$category'>$category</option>";
                }
                echo $result;
              ?>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="design_info" type="text" name="design_info" class="validate" data-length="40" required>
            <label for="design_info">Name / Short Description
            </label>
          </div>
        </div>

        <div class="file-field input-field" style="margin-left: 9px; margin-right: 9px;">
          <div class="btn">
            <span>design Image
          </span>
            <input type="file" name="design_image" required>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>

        <div style="display: flex; justify-content: center;">
          <!-- col-md-6 Starts -->
          <button type="submit" name="submit" class="btn waves-effect waves-light">
            Insert design
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <!-- form Ends -->
    </div>
    <!-- Main row Ends -->
    <?php
  if(isset($_POST['submit'])){
    if(isset($_POST['category'])){
      $design_info = $_POST['design_info'];
      $design_category = $_POST['category'];
      $design_image = uniqid()."_".$_FILES['design_image']['name'];
      $temp_design_image = $_FILES['design_image']['tmp_name'];

      move_uploaded_file($temp_design_image,"assets/img/design/$design_image");

      $insert_design = "INSERT INTO `design` (`image`, `info`, `category`) VALUES ('$design_image', '$design_info', '$design_category')";
      $run_design = mysqli_query($con,$insert_design);
      if($run_design){
        echo "<script>alert('Successfully Added !')</script>";
        echo "<script>window.open('index.php?add_design','_self')</script>";
      }
    }else{
      echo "<script>alert('Error! Select the Category!')</script>";
    }
  }
?>
      <!--Main coading of Insert New design Ends-->
  </section>
  <?php }  ?>
