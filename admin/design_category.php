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
      <h1 class="page-announce-text valign">Manage Category
      </h1>
    </div>
    <!--Main coading of View All category Start-->
    <div style="margin-left: 3%; margin-right: 3%;">
      <table class="responsive-table centered highlight bordered">
        <!-- table table-bordered table-hover table-striped Starts -->
        <thead>
          <!-- thead Starts -->
          <tr>
            <th>Category Name
            </th>
            <th>Delete Category
            </th>
          </tr>
        </thead>
        <!-- thead Ends -->
        <tbody>
          <!-- tbody Starts -->
          <?php
$get_category = "select * from category";
$run_category = mysqli_query($con,$get_category);
  
while($row_category = mysqli_fetch_array($run_category)){
$category_id = $row_category['id'];
$category_name = $row_category['category_name'];
?>
            <tr class="card white-grey darken-1 hoverable">
              <td style="color: green;">
                <strong><?php echo $category_name; ?></strong>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?category_delete=<?php echo $category_id; ?>">
            <i class="material-icons">delete</i>
          </a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
        <!-- tbody Ends -->
      </table>
      <!-- table table-bordered table-hover table-striped Ends -->

      <!--Main coading of View All category Ends-->

      
        <form method="post" action="index.php?category_add" class="col s12">
          <div class="card white-grey darken-1 hoverable">
            <div class="row">
              <div class="card-content">
                <div class="input-field">
                  <i class="material-icons prefix">edit</i>
                  <input id="category_name" name="category_name" type="text" class="validate" required>
                  <label for="category_name">Category Name</label>
                </div>
                <div style="display: flex; justify-content: center;">
                  <button type="submit" name="submit" class="btn waves-effect waves-light">Add Category</button>
                </div>
              </div>
            </div>
          </div>
        </form>
     
    </div>
  </section>
  <?php }  ?>
