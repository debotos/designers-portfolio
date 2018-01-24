<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <section class="content">
    <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
      <h1 class="page-announce-text valign">All Testimonials </h1>
    </div>
    <!--Main coading of Testimonial list Start-->
    <div style="margin-left: 3%; margin-right: 3%;">
      <table class="responsive-table centered highlight bordered">
        <!-- table table-bordered table-hover table-striped Starts -->
        <thead>
          <!-- thead Starts -->
          <tr>
            <th>Name
            </th>
            <th>Image
            </th>
            <th>Job
            </th>
            <th>Rating
            </th>
            <th>Description
            </th>
            <th>Edit
            </th>
            <th>Delete
            </th>
          </tr>
        </thead>
        <!-- thead Ends -->
        <tbody>
          <!-- tbody Starts -->
          <?php
          $get_testimonial = "SELECT * FROM `testimonial`";
          $run_testimonial = mysqli_query($con,$get_testimonial);
          while($row_testimonial = mysqli_fetch_array($run_testimonial)){
          $testimonial_id = $row_testimonial['id'];
          $testimonial_name = $row_testimonial['name'];
          $testimonial_image = $row_testimonial['image'];
          $testimonial_position = $row_testimonial['position'];
          $testimonial_star = $row_testimonial['star'];
          $testimonial_description = $row_testimonial['description'];
        ?>
            <tr class="card white-grey darken-1 hoverable">
              <td style="color: green;">
                <strong><?php echo $testimonial_name; ?></strong>
              </td>
              <td>
                <img src="assets/img/testimonial/<?php echo $testimonial_image; ?>" width="60" height="60">
              </td>
              <td  style="color: orange;">
                <strong><?php echo $testimonial_position; ?></strong>
              </td>
              <td style="color: #9f1d1d;">
                <strong><?php echo $testimonial_star; ?></strong>
              </td>
              <td style="color: darkblue; border: 2px solid yellow;">
                <strong><?php echo $testimonial_description; ?></strong>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?testimonial_edit=<?php echo $testimonial_id; ?>">
                   <i class="material-icons">edit</i>
                </a>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?testimonial_delete=<?php echo $testimonial_id; ?>&image=<?php echo $testimonial_image; ?>">
                  <i class="material-icons">delete</i>
                </a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
        <!-- tbody Ends -->
      </table>
    </div>
    <!-- table table-bordered table-hover table-striped Ends -->
    <!--Main coading of Testimonial list Ends-->
  </section>
  <?php }  ?>
