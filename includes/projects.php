<?php
  include("db.php");
  // Second Query
  $second_qurey = "SELECT * FROM `category`";
  $run_second_query = mysqli_query($con, $second_qurey);
  
  // Identifier for tabview
  $count_field = 1000;
  $count_data = 1000;
  $flag = true;
  $category_items = array();
?>
 <section id="portfolio" class="section mt-2 pb-5 mb-4">
  <div class="container">
    <!--Section heading-->
    <div class="row mt-4">
      <div class="col-md-12 ">
        <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s">My projects</h2>
        <hr class="between-sections">
        <p class="section-description mt-5 wow fadeIn" data-wow-delay="0.2s">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia. </p>
      </div>
    </div>
  </div>
  <!--First row-->
  <div class="row">
    <!--First column-->
    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">
      <!-- Nav tabs -->
      <ul class="nav md-pills flex-center flex-wrap mx-0" role="tablist">
        <?php 
          while($second_result = mysqli_fetch_array($run_second_query)) {
            $category = $second_result['category_name'];
            $category_items[] = $category;
            if($count_field == 1000){
              echo "<li class='nav-item'>
          <a class='nav-link active font-bold' data-toggle='tab' href='#$count_field' role='tab'>$category</a>
        </li>";
            }else{
              echo "<li class='nav-item'>
          <a class='nav-link font-bold' data-toggle='tab' href='#$count_field' role='tab'>$category</a>
        </li>";
            }
            $count_field++;
          }
        ?>
      </ul>
    </div>
    <!--Tab panels-->
    <div class="tab-content" style="height: 700px; overflow-y: auto; overflow-x: hidden;">
      <?php 
        for($i = 0; $i < count($category_items); $i++) {
          
          $single_category_item = $category_items[$i];
          $main_query = "SELECT * FROM `design` WHERE category='$single_category_item'";
          $run_main_query = mysqli_query($con, $main_query);
            
            if($flag){
              echo "<div class='tab-pane fade show in active' id='$count_data' role='tabpanel'>
                  <br><div class='row ml-5 mr-5 mt-2'>";
              while($design_result = mysqli_fetch_array($run_main_query)){
                $image = $design_result['image'];
                $info = $design_result['info'];
                echo "<!-- column-->
                    <div class='col-lg-3 col-md-6'>
                      <!--Featured image-->
                      <div class='card overlay hm-white-slight hm-zoom z-depth-2'>
                        <a data-fancybox='$count_data' data-caption='$info' href='admin/assets/img/design/$image'><img class='img-fluid' src='admin/assets/img/design/$image'></a>
                      </div>
                      <p class='font-up text-center font-bold blue-grey-text mt-4 mb-4'>$info</p>
                    </div>
                    <!--/ column-->";
              }
              echo "</div></div>";
                $flag = false;
            }else{
              echo "<div class='tab-pane fade' id='$count_data' role='tabpanel'>
                  <br><div class='row ml-5 mr-5 mt-2'>";
              while($design_result = mysqli_fetch_array($run_main_query)){
                $image = $design_result['image'];
                $info = $design_result['info'];
                echo "<!-- column-->
                    <div class='col-lg-3 col-md-6'>
                      <!--Featured image-->
                      <div class='card overlay hm-white-slight hm-zoom z-depth-2'>
                        <a data-fancybox='$count_data' data-caption='$info' href='admin/assets/img/design/$image'><img class='img-fluid' src='admin/assets/img/design/$image'></a>
                      </div>
                      <p class='font-up text-center font-bold blue-grey-text mt-4 mb-4'>$info</p>
                    </div>
                    <!--/ column-->";
              }
              echo "</div></div>";
            }
          
          $count_data++;
        }
      ?>
    </div>
    <!--/.Panel 4-->
  </div>
  <!--/Tab panels-->
</section>
