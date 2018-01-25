<?php
  include("db.php");
  // Second Query
  $qurey = "SELECT * FROM `about`";
  $run_query = mysqli_query($con, $qurey);
  $result = mysqli_fetch_array($run_query);
  $full_name = $result['full_name'];
?>
  <div id="video-carousel-example2" class="carousel slide carousel-fade smooth-scroll" data-ride="carousel">
    <!--Indicators-->
    <!-- <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol> -->
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner smooth-scroll" role="listbox">

      <!--Second slide-->
      <div class="carousel-item smooth-scroll active">
        <!--Mask color-->
        <div class="view hm-blue-slight">
          <!--Video source-->
          <video class="video-full" autoplay loop>
          <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
          <div class="mask"></div>
        </div>

        <!-- Caption -->
        <div class="carousel-caption full-bg-img flex-center white-text">

          <div class="container flex-center">
            <div class="row smooth-scroll">
              <div class="col-md-12">
                <div class="wow fadeInUp text-center">
                  <h2 class="display-3 font-bold white-text mb-3"><?php echo $full_name; ?></h2>
                  <h4 class="font-up font-bold white-text pb-5">Graphic designer</h4>
                  <h2 class=" mt-4 white-text">Welcome to my portfolio!</h2>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.Caption -->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span> -->
      </a>
      <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span> -->
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
  </div>
