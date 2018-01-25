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
  $first_name = $second_result['first_name'];
?>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo $first_name; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto smooth-scroll">
        <li class="nav-item">
          <a class="nav-link" href="#video-carousel-example2">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about" data-offset="100">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio" data-offset="90">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" data-offset="100">Contact</a>
        </li>
      </ul>
      <!-- Social Icon  -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="<?php echo $facebook; ?>" class="nav-link"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $twitter; ?>" class="nav-link"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $instagram; ?>" class="nav-link"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
