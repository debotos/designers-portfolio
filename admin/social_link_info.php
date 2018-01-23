<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
  $query_to_get_info = "SELECT * FROM `info`";
  $run_qurey_for_info = mysqli_query($con, $query_to_get_info);
  $info_query_result = mysqli_fetch_array($run_qurey_for_info);
  
  $info_facebook_profile = $info_query_result['facebook_profile'];
  $info_twitter_profile = $info_query_result['twitter_profile'];
  $info_google_plus_profile = $info_query_result['google_plus_profile'];
  $info_youtube_profile = $info_query_result['youtube_profile'];
  $info_instagram_profile = $info_query_result['instagram_profile'];
  $info_upwork_profile = $info_query_result['upwork_profile'];
  $info_freelancer_profile = $info_query_result['freelancer_profile'];
  $info_address = $info_query_result['address'];
  $info_mail = $info_query_result['mail'];
  $info_phone = $info_query_result['phone'];
?>
  <section class="content">
    <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
      <h1 class="page-announce-text valign">Your Information </h1> </div>
    <!--Main coading of social link and info page Start-->
    <div class="row" style="padding-left: 5%; padding-right: 5%;">
      <!--Facebook-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_facebook_profile; ?>" id="facebook" name="facebook" type="text" class="validate" required>
            <label for="facebook">Facebook Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_facebook" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Facebook-->
      <!--Twitter-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_twitter_profile; ?>" id="twitter" name="twitter" type="text" class="validate" required>
            <label for="twitter">Twitter Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_twitter" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Twitter-->
      <!--Google-plus-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_google_plus_profile; ?>" id="google-plus" name="google-plus" type="text" class="validate" required>
            <label for="google-plus">Google plus Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_google-plus" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Google-plus-->
      <!--Youtube-play-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_youtube_profile; ?>" id="youtube-play" name="youtube-play" type="text" class="validate" required>
            <label for="youtube-play">Youtube Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_youtube-play" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Youtube-play-->
      <!--Instagram-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_instagram_profile; ?>" id="instagram" name="instagram" type="text" class="validate" required>
            <label for="instagram">Instagram Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_instagram" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Instagram-->
      <!--Upwork-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-keyboard-o fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_upwork_profile; ?>" id="upwork" name="upwork" type="text" class="validate" required>
            <label for="upwork">Upwork Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_upwork" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Upwork-->
      <!--Freelancer-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_freelancer_profile; ?>" id="freelancer" name="freelancer" type="text" class="validate" required>
            <label for="freelancer">Freelancer Profile</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_freelancer" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Freelancer-->
      <!--Mail-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_mail; ?>" id="mail" name="mail" type="email" class="validate" required>
            <label for="mail">Email Address</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_mail" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Mail-->
      <!--Contact Numbers-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_phone; ?>" id="contact" name="contact" type="text" class="validate" required>
            <label for="contact">Contact Numbers</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_contact" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Contact Numbers-->
      <!--Address-->
      <form method="post" action="" class="col s12">
        <!--card body-->
        <div class="row" style="display: flex;"> <span class="fa-stack fa-lg" style="margin-top: 20px; color: #F4425C;">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
        </span>
          <div class="input-field" style="width: 100%; margin-left: 10px;">
            <input value="<?php echo $info_address; ?>" id="address" name="address" type="text" class="validate" required>
            <label for="address">Your Address</label>
          </div>
          <div>
            <button style="margin-top: 15px;" type="submit" name="submit_address" class="btn-floating btn-small waves-effect waves-light red"> <i class="material-icons">save</i></button>
          </div>
        </div>
        <!--./card body-->
      </form>
      <!--./Address-->
    </div>
    <!--Form Submit Handling-->
    <?php 
      // Facebook
      if(isset($_POST['submit_facebook'])){
        $facebook_profile_update = $_POST['facebook'];
        
        $update_info = "UPDATE `info` SET `facebook_profile` = '$facebook_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Twitter
      if(isset($_POST['submit_twitter'])){
        $twitter_profile_update = $_POST['twitter'];
        
        $update_info = "UPDATE `info` SET `twitter_profile` = '$twitter_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Google Plus
      if(isset($_POST['submit_google-plus'])){
        $google_plus_profile_update = $_POST['google-plus'];
        
        $update_info = "UPDATE `info` SET `google_plus_profile` = '$google_plus_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Youtube
      if(isset($_POST['submit_youtube-play'])){
        $youtube_play_profile_update = $_POST['youtube-play'];
        
        $update_info = "UPDATE `info` SET `youtube_profile` = '$youtube_play_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Instagram
      if(isset($_POST['submit_instagram'])){
        $instagram_profile_update = $_POST['instagram'];
        
        $update_info = "UPDATE `info` SET `instagram_profile` = '$instagram_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Upwork
      if(isset($_POST['submit_upwork'])){
        $upwork_profile_update = $_POST['upwork'];
        
        $update_info = "UPDATE `info` SET `upwork_profile` = '$upwork_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Freelancer
      if(isset($_POST['submit_freelancer'])){
        $freelancer_profile_update = $_POST['freelancer'];
        
        $update_info = "UPDATE `info` SET `freelancer_profile` = '$freelancer_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Mail
      if(isset($_POST['submit_mail'])){
        $mail_profile_update = $_POST['mail'];
        
        $update_info = "UPDATE `info` SET `mail` = '$mail_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Contact
      if(isset($_POST['submit_contact'])){
        $contact_profile_update = $_POST['contact'];
        
        $update_info = "UPDATE `info` SET `phone` = '$contact_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      // Address
      if(isset($_POST['submit_address'])){
        $address_profile_update = $_POST['address'];
        
        $update_info = "UPDATE `info` SET `address` = '$address_profile_update' WHERE `info`.`id` = 1";
        $run_update_info = mysqli_query($con, $update_info);
        if($run_update_info){
          echo "<script>alert('Update Successful!')</script>";
          echo "<script>window.open('index.php?social_link_info','_self')</script>";
        }
      }
  
      
    ?>
      <!--./Form Submit Handling-->
      <!--./Main coading of social link and info page Ends-->
  </section>
  <?php } ?>