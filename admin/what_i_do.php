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
      <h1 class="page-announce-text valign">What You Do
      </h1>
    </div>
    <!--Main coading of View All what_i_do Start-->
    <div style="margin-left: 3%; margin-right: 3%;">
      <table class="responsive-table centered highlight bordered">
        <!-- table table-bordered table-hover table-striped Starts -->
        <thead>
          <!-- thead Starts -->
          <tr>
            <th>You Do
            </th>
            <th>Icon Name
            </th>
            <th>Information
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
            $get_what_i_do = "SELECT * FROM `whai_i_do`";
            $run_what_i_do = mysqli_query($con, $get_what_i_do);

            while($row_what_i_do = mysqli_fetch_array($run_what_i_do)){
              $what_i_do_id = $row_what_i_do['id'];
              $what_i_do_name = $row_what_i_do['name'];
              $what_i_do_icon = $row_what_i_do['icon'];
              $what_i_do_info = $row_what_i_do['info'];
          ?>
            <tr class="card white-grey darken-1 hoverable">
              <td style="color: darkblue;">
                <strong><?php echo $what_i_do_name; ?></strong>
              </td>
              <td style="color: orange;">
                <strong><?php echo $what_i_do_icon; ?> </strong>
              </td>
              <td style="color: green;">
                <strong><?php echo $what_i_do_info; ?> </strong>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?what_i_do_edit=<?php echo $what_i_do_id; ?>">
                <i class="material-icons">edit</i>
              </a>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?what_i_do_delete=<?php echo $what_i_do_id; ?>">
                <i class="material-icons">delete</i>
              </a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
        <!-- tbody Ends -->
      </table>
      <!-- table table-bordered table-hover table-striped Ends -->

      <!--Main coading of View All what_i_do Ends-->


      <form method="post" action="index.php?what_i_do_add" class="col s12">
        <div class="card white-grey darken-1 hoverable">
          <div class="card-content">
            <div class="row">
              <div class="input-field">
                <i class="material-icons prefix">edit</i>
                <input id="what_i_do_name" name="what_i_do_name" type="text" class="validate" required>
                <label for="what_i_do_name">What You Do</label>
              </div>
              <div class="row" style="display: flex; flex-direction: row;">
                <div class="input-field" style="width: 100%;">
                  <i class="material-icons prefix">face</i>
                  <input id="what_i_do_icon" name="what_i_do_icon" type="text" class="validate" required>
                  <label for="what_i_do_icon">Icon Name</label>
                </div>
                <div style="margin-top: 10px;">
                  <a class="btn-floating btn-small waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="click to copy the icon name from here" href="https://fontawesome.io/icons/" target="_blank"><i class="material-icons">help</i></a>
                </div>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">info</i>
                <textarea id="what_i_do_info" name="what_i_do_info" class="materialize-textarea" required></textarea>
                <label for="what_i_do_info">Details</label>
              </div>
            </div>
            <div style="display: flex; justify-content: center;">
              <button type="submit" name="submit" class="btn waves-effect waves-light">Add What I Do</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </section>
  <?php }  ?>
