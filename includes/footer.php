<?php
  include("db.php");
  $query = "SELECT * FROM `info`";
  $run_query = mysqli_query($con, $query);
  $result = mysqli_fetch_array($run_query);
  $facebook = $result['facebook_profile'];
  $twitter = $result['twitter_profile'];
  $google_plus = $result['google_plus_profile'];
  $youtube = $result['youtube_profile'];
  $instagram = $result['instagram_profile'];

  // Second Query
  $second_qurey = "SELECT * FROM `about`";
  $run_second_query = mysqli_query($con, $second_qurey);
  $second_result = mysqli_fetch_array($run_second_query);
  $full_name = $second_result['full_name'];
?>
 <footer class="page-footer center-on-small-only">
  <!--Footer Links-->
  <div class="container mb-2">
    <!--First row-->
    <div class="row my-4 pb-3">
      <!--First column-->
      <div class="col-md-12 mb-1 wow fadeIn" data-wow-delay="0.3s">
        <div class="footer-socials mt-1 text-center">
          <!--Facebook-->
          <a href="<?php echo $facebook; ?>" type="button" class="btn-floating btn-secondary"><i class="fa fa-facebook"></i></a>
          <!--Twitter-->
          <a href="<?php echo $twitter; ?>" type="button" class="btn-floating btn-secondary"><i class="fa fa-twitter"></i></a>
          <!--Google +-->
          <a href="<?php echo $google_plus; ?>" type="button" class="btn-floating btn-secondary"><i class="fa fa-google-plus"></i></a>
          <!--Youtube-->
          <a href="<?php echo $youtube; ?>" type="button" class="btn-floating btn-secondary"><i class="fa fa-youtube"></i></a>
          <!--Instagram-->
          <a href="<?php echo $instagram; ?>" type="button" class="btn-floating btn-secondary"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <!--/First column-->
    </div>
    <!--/First row-->
  </div>
  <!--/Footer Links-->
  <!--Copyright-->
  <div class="footer-copyright wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
      ©
      <?php echo date("Y"); ?> All rights reserved by <a href="#"> <?php echo $full_name; ?> </a>
    </div>
  </div>
  <!--/Copyright-->
</footer>
