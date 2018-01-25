<?php
  include("db.php");
  $query = "SELECT * FROM `testimonial`";
  $run_query = mysqli_query($con, $query);

  $flag = true;
?>
<!--Section: Testimonials v.2-->
<section class="section py-5 mb-4">
  <!--Section heading-->
  <h2 class="font-up text-center font-bold my-4 wow fadeIn" data-wow-delay="0.2s">Testimonials</h2>
  <hr class="between-sections">
  <!--Carousel Wrapper-->
  <div id="testimonial_carousel" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <?php 
        while($result = mysqli_fetch_array($run_query)){
          
          $name = $result['name'];
          $image = $result['image'];
          $position = $result['position'];
          $star = $result['star'];
          $description = $result['description'];
          
          if($flag){
            echo "<!--slide-->
            <div class='carousel-item active'>
              <div class='testimonial mt-4 text-center'>
                <!--Content-->
                <p><i class='fa fa-quote-left'></i>$description</p>
                <div class='mt-4'>
                  <div class='avatar'>
                    <img src='admin/assets/img/testimonial/$image' class='rounded-circle z-depth-1 img-fluid'>
                  </div>
                  <h5><strong>$name</strong></h5>
                  <p>$position</p>
                </div>";
                //Review
                echo "<div class='indigo-text'>";
                $integer_star = (int) $star;
                $decimal_star  = $star - (int) $star;
                for($i = 0; $i < $integer_star; $i++){
                  echo "<i class='fa fa-star'> </i>";
                }
                if(intval($decimal_star) != 0){
                  echo "<i class='fa fa-star-half-full'> </i>";
                }
                echo "</div>";
              echo "</div>";
            echo "</div>";
            echo "<!--/slide-->";
            $flag = false;
          }else{
            echo "<!--slide-->
            <div class='carousel-item'>
              <div class='testimonial mt-4 text-center'>
                <!--Content-->
                <p><i class='fa fa-quote-left'></i>$description</p>
                <div class='mt-4'>
                  <div class='avatar'>
                    <img src='admin/assets/img/testimonial/$image' class='rounded-circle z-depth-1 img-fluid'>
                  </div>
                  <h5><strong>$name</strong></h5>
                  <p>$position</p>
                </div>";
                //Review
                echo "<div class='indigo-text'>";
                $integer_star = (int) $star;
                $decimal_star  = $star - (int) $star;
                for($i = 0; $i < $integer_star; $i++){
                  echo "<i class='fa fa-star'> </i>";
                }
                if(intval($decimal_star) != 0){
                  echo "<i class='fa fa-star-half-full'> </i>";
                }
                echo "</div>";
              echo "</div>";
            echo "</div>";
            echo "<!--/slide-->";
          }
        }
      ?>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-item-prev left carousel-control" href="#testimonial_carousel" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-item-next right carousel-control" href="#testimonial_carousel" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
</section>
<!--Section: Testimonials v.2-->
