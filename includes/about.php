<?php
  include("db.php");
  $query = "SELECT * FROM `skills`";
  $run_query = mysqli_query($con, $query);

  // Second Query
  $second_qurey = "SELECT * FROM `about`";
  $run_second_query = mysqli_query($con, $second_qurey);
  $second_result = mysqli_fetch_array($run_second_query);
  $who_am_i = $second_result['who_am_i'];
?>
  <section id="about" class="section mt-1 mb-3">
    <!--Secion heading-->
    <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s">About me</h2>
    <hr class="between-sections">
    <!-- First row -->
    <div class="row pt-5">
      <!--First column-->
      <div class="col-lg-5 col-md-12 wow fadeIn" data-wow-delay="0.4s">
        <!--Secion heading-->
        <div class="d-flex justify-content-start">
          <h4 class="text-center font-up mb-5 wow fadeIn" data-wow-delay="0.2s">Who <strong>I am</strong>?</h4>
        </div>
        <!--Description-->
        <p class="grey-text mb-3" align="justify">
          <?php echo $who_am_i; ?>
        </p>
      </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-lg-6 offset-lg-1 col-md-12 mb-5 wow fadeIn" data-wow-delay="0.4s">
        <!--Second headind-->
        <div class="d-flex justify-content-start">
          <h4 class="text-center font-up mb-5 wow fadeIn" data-wow-delay="0.2s">My <strong>Skills</strong></h4>
        </div>
        <!--Description-->
        <?php 
        while($result = mysqli_fetch_array($run_query)){
          $name = $result['name'];
          $percentage = intval($result['percentage']);
          echo "<p class='black-text font-up font-bold' align='justify'>$name</p>
      <div class='progress'>
        <div class='progress-bar' role='progressbar' style='width: $percentage%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
      </div>";
        }
      ?>
      </div>
      <!--/Second column-->
    </div>
    <!--/First row-->
  </section>
