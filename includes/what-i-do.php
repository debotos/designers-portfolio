<?php
  include("db.php");
  $query = "SELECT * FROM `whai_i_do`";
  $run_query = mysqli_query($con, $query);
?>
  <div class="container mb-5">
    <!--Secion heading-->
    <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s">What I do</h2>
    <hr class="between-sections pb-5">
    <!--First row-->
    <div class="row  wow fadeIn" data-wow-delay="0.2s">
    
    <?php 
      while($result = mysqli_fetch_array($run_query)){
        $name = $result['name'];
        $icon = $result['icon'];
        $info = $result['info'];
        
        echo "<div class='col-lg-3 col-md-6 text-center mt-1'>
        <div class='icon-area'>
          <div class='circle-icon'>
            <i class='fa $icon'></i>
          </div>
          <br>
          <strong>$name</strong>
          <p>$info</p>
        </div>
      </div>";
      }
    ?>  
      
    </div>
    <!--/First row-->
  </div>
