<?php
include("includes/db.php");
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
  $get_admin_count = "SELECT * FROM `admins`";
  $run_admin_count = mysqli_query($con, $get_admin_count);
  $admin_count = mysqli_num_rows($run_admin_count);

  $get_messages = "SELECT * FROM `message`";
  $run_messages = mysqli_query($con, $get_messages);
  $message_count = mysqli_num_rows($run_messages);

  $get_testimonial = "SELECT * FROM `testimonial`";
  $run_testimonial = mysqli_query($con,$get_testimonial);
  $testimonial_count = mysqli_num_rows($run_testimonial);

  $get_design = "SELECT * FROM `design`";
  $run_design = mysqli_query($con,$get_design);
  $design_count = mysqli_num_rows($run_design);
?>
  <section class="content">
    <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
      <h1 class="page-announce-text valign">Dashboard </h1>
    </div>
    <!--Main coading of Dashboard Start-->
    <div class="row">
      <div class="col s12 m4">
        <div class="card darken-1" style="background-color: #F4425C;">
          <div class="card-content hoverable white-text">
            <span class="card-title center-align">Admin</span>
            <div style="display: flex; flex-direction: row; text-align: justify;">
              <i style="font-size: 100px;" class="material-icons">people</i>
              <p style="font-size: 200px; overflow-x: auto;">
                <?php echo $admin_count; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card darken-1" style="background-color: #F4425C;">
          <div class="card-content hoverable white-text">
            <span class="card-title center-align">Message</span>
            <div style="display: flex; flex-direction: row;">
              <i style="font-size: 100px;" class="material-icons">markunread</i>
              <p style="font-size: 200px; overflow-x: auto;">
                <?php echo $message_count; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card darken-1" style="background-color: #F4425C;">
          <div class="card-content hoverable white-text">
            <span class="card-title center-align">Testimonial</span>
            <div style="display: flex; flex-direction: row;">
              <i style="font-size: 100px;" class="material-icons">sentiment_very_satisfied</i>
              <p style="font-size: 200px; overflow-x: auto;">
                <?php echo $testimonial_count; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          <div class="card darken-1" style="background-color: #F4425C;">
            <div class="card-content hoverable white-text">
              <span class="card-title center-align">Design</span>
              <div style="display: flex; flex-direction: row;">
                <i style="font-size: 100px;" class="material-icons">wallpaper</i>
                <p style="font-size: 200px; overflow-x: auto;">
                  <?php echo $design_count; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <!--Main coading of Dashboard Ends-->
  </section>
  <?php } ?>
