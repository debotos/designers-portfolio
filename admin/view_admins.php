<section class="content">
  <div class="page-announce valign-wrapper">
    <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
      <i class="material-icons">menu
      </i>
    </a>
    <h1 class="page-announce-text valign">View All Admin 
    </h1>
  </div>
  <!--Main coading of View All Admin Start-->
  <?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
  <table class="responsive-table centered highlight bordered">
    <!-- table table-bordered table-hover table-striped Starts -->
    <thead>
      <!-- thead Starts -->
      <tr>
        <th>Admin Name:
        </th>
        <th>Admin Email:
        </th>
        <th>Admin Image:
        </th>
        <th>Admin Contact:
        </th>
        <th>Delete Admin:
        </th>
      </tr>
    </thead>
    <!-- thead Ends -->
    <tbody>
      <!-- tbody Starts -->
      <?php
$get_admin = "select * from admins";
$run_admin = mysqli_query($con,$get_admin);
while($row_admin = mysqli_fetch_array($run_admin)){
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_image = $row_admin['admin_image'];
$admin_contact = $row_admin['admin_contact'];
?>
      <tr>
        <td>
          <?php echo $admin_name; ?>
        </td>
        <td>
          <?php echo $admin_email; ?>
        </td>
        <td>
          <img src="assets/img/admin/<?php echo $admin_image; ?>" width="60" height="60">
        </td>
        <td>
          <?php echo $admin_contact; ?>
        </td>
        <td>
          <a href="index.php?admin_delete=<?php echo $admin_id; ?>">
            <i class="fa fa-trash-o">
            </i> Delete
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
    <!-- tbody Ends -->
  </table>
  <!-- table table-bordered table-hover table-striped Ends -->
  <?php }  ?>
  <!--Main coading of View All Admin Ends-->
</section>
