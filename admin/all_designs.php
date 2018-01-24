<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <section class="content">
    <div class="page-announce valign-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
      <i class="material-icons">menu
      </i>
    </a>
      <h1 class="page-announce-text valign">List Of All Design
      </h1>
    </div>
    <!--Main coading of View All design Start-->
    <div style="margin-left: 3%; margin-right: 3%;">
    <table class="responsive-table centered highlight bordered">
      <!-- table table-bordered table-hover table-striped Starts -->
      <thead>
        <!-- thead Starts -->
        <tr>
          <th>Image
          </th>
          <th>Details
          </th>
          <th>Category
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
$get_design = "SELECT * FROM `design`";
$run_design = mysqli_query($con,$get_design);
while($row_design = mysqli_fetch_array($run_design)){
$design_id = $row_design['id'];
$design_category = $row_design['category'];
$design_image = $row_design['image'];
$design_info = $row_design['info'];
?>
          <tr class="card white-grey darken-1 hoverable">
           <td>
              <img src="assets/img/design/<?php echo $design_image; ?>" width="60" height="60">
            </td>
            <td>
              <?php echo $design_info; ?>
            </td>
            <td style="color: darkblue;">
              <strong><?php echo $design_category; ?></strong>
            </td> 
            <td>
              <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?design_edit=<?php echo $design_id; ?>">
              <i class="material-icons">edit</i>
          </a>
            </td>
            <td>
              <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?design_delete=<?php echo $design_id; ?>&image=<?php echo $design_image; ?>">
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
    <!--Main coading of View All design Ends-->
  </section>
<?php }  ?>