<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
  if(isset($_GET['what_i_do_edit'])){
    $what_i_do_edit_id = $_GET['what_i_do_edit'];
    $main_what_i_do_query = "SELECT * FROM `whai_i_do` WHERE id=$what_i_do_edit_id";
    $result_main_what_i_do_query = mysqli_query($con, $main_what_i_do_query);
    $result_array = mysqli_fetch_array($result_main_what_i_do_query);
    
    $what_i_do_name = $result_array['name'];
    $what_i_do_icon = $result_array['icon'];
    $what_i_do_info = $result_array['info'];
  }
?>
  <section class="content">
    <div class="page-announce valign-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
      <i class="material-icons">menu
      </i>
    </a>
      <h1 class="page-announce-text valign">Edit What You Do
      </h1>
    </div>
    <!--Main coading of View All what_i_do_edit Start-->
    <div style="margin-left: 3%; margin-right: 3%;">

      <form method="post" action="" class="col s12">
        <div class="card white-grey darken-1">
          <div class="card-content">
            <div class="row">
              <div class="input-field">
                <i class="material-icons prefix">edit</i>
                <input id="what_i_do_name" value="<?php echo $what_i_do_name; ?>" name="what_i_do_name" type="text" class="validate" required>
                <label for="what_i_do_name">What You Do</label>
              </div>
              <div class="row" style="display: flex; flex-direction: row;">
                <div class="input-field" style="width: 100%;">
                  <i class="material-icons prefix">face</i>
                  <input id="what_i_do_icon" name="what_i_do_icon" value="<?php echo $what_i_do_icon; ?>" type="text" class="validate" required>
                  <label for="what_i_do_icon">Icon Name</label>
                </div>
                <div style="margin-top: 10px;">
                  <a title="copy the icon name" class="btn-floating btn-small waves-effect waves-light green" href="https://fontawesome.io/icons/" target="_blank"><i class="material-icons">help</i></a>
                </div>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">info</i>
                <textarea id="what_i_do_info" name="what_i_do_info" class="materialize-textarea" required>
                  <?php echo $what_i_do_info ?>
                </textarea>
                <label for="what_i_do_info">Details</label>
              </div>
            </div>
            <div style="display: flex; justify-content: center;">
              <button type="submit" name="update" class="btn waves-effect waves-light">Update It</button>
            </div>
          </div>
        </div>
      </form>

    </div>
    <!--Main coading of View All what_i_do_edit Ends-->
    <?php
      if(isset($_POST['update'])){
        $updated_what_i_do_name = $_POST['what_i_do_name'];
        $updated_what_i_do_icon = $_POST['what_i_do_icon'];
        $updated_what_i_do_info = $_POST['what_i_do_info'];
        
        $update_query = "UPDATE `whai_i_do` SET `name` = '$updated_what_i_do_name', `icon` = '$updated_what_i_do_icon', `info` = '$updated_what_i_do_info' WHERE `whai_i_do`.`id` = $what_i_do_edit_id";
        $run_update_query = mysqli_query($con, $update_query);
        if($run_update_query){
          echo "<script>window.open('index.php?what_i_do','_self')</script>";
        }
      } 
    ?>
  </section>
  <?php }  ?>
