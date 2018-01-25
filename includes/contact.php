<?php
  include("db.php");
  $query = "SELECT * FROM `info`";
  $run_query = mysqli_query($con, $query);
  $result = mysqli_fetch_array($run_query);
  $upwork = $result['upwork_profile'];
  $freelancer = $result['freelancer_profile'];
  $mail = $result['mail'];
  $address = $result['address'];
  $phone = $result['phone'];

  // Second Query
  $second_qurey = "SELECT * FROM `about`";
  $run_second_query = mysqli_query($con, $second_qurey);
  $second_result = mysqli_fetch_array($run_second_query);
  $full_name = $second_result['full_name'];
?>
 <section id="contact" class="section mb-4">
  <!--Section heading-->
  <h2 class="text-center font-up font-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact me</h2>
  <hr class="between-sections">
  <!--Section sescription-->
  <p class="section-description my-5 pb-3 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
  <div class="row wow fadeIn" data-wow-delay="0.4s">
    <!--First column-->
    <div class="col-md-8 mb-r">
      <form method="post" action="">
        <!--First row-->
        <div class="row">
          <!--First column-->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input name="name" placeholder="Your name" type="text" id="form41" class="form-control" required>

              </div>
            </div>
          </div>
          <!--Second column-->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input name="email" placeholder="Your email" type="email" id="form52" class="form-control validate" required>

              </div>
            </div>
          </div>
        </div>
        <!--/.First row-->
        <!--Second row-->
        <div class="row">
          <div class="col-md-12">
            <div class="md-form">
              <input name="subject" type="text" id="form51" placeholder="Subject" class="form-control" required>

            </div>
          </div>
        </div>
        <!--/Second row-->
        <!--Third row-->
        <div class="row">
          <!--First column-->
          <div class="col-md-12">
            <div class="md-form">
              <textarea name="message" placeholder="Your message" type="text" id="form76" class="md-textarea" required></textarea>
            </div>
          </div>
        </div>
        <!--/.Third row-->
        <div class="center-on-small-only">
          <button type="submit" name="submit" class="btn btn-secondary btn-rounded">
            Send
          </button>
        </div>
      </form>
      
    </div>
    <!--.First column-->
    <!--Second column-->
    <div class="col-md-4">
      <ul class="contact-icons list-unstyled">
        <li><i class="fa fa-map-marker fa-2x"></i>
          <p><?php echo $address; ?></p>
        </li>
        <li><i class="fa fa-phone fa-2x"></i>
          <p><?php echo $phone; ?></p>
        </li>
        <li><i class="fa fa-envelope fa-2x"></i>
          <p><?php echo $mail; ?></p>
        </li>
        <li>
          <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
          <p>
            <a style="margin-left: 0px;" href="<?php echo $upwork; ?>" >Upwork</a> &nbsp;
            <a href="<?php echo $freelancer; ?>">Freelancer</a>
          </p>
        </li>
      </ul>
    </div>
    <!--.Second column-->
  </div>
  <?php
    if(isset($_POST['submit'])){
      
      $name = $_POST['name'];
      $mail = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $insert_query = "INSERT INTO `message` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$mail', '$subject', '$message')";
      $run_insert_query = mysqli_query($con, $insert_query);
      
      if($run_insert_query){
        echo "<script>window.open('index.php','_self')</script>";
      }
    }
   ?>
</section>
<!--/Section: Contact v.2-->
