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
      <h1 class="page-announce-text valign">Your Skills
      </h1>
    </div>
    <!--Main coading of View All skills Start-->
    <div style="margin-left: 3%; margin-right: 3%;">
      <table class="responsive-table centered highlight bordered">
        <!-- table table-bordered table-hover table-striped Starts -->
        <thead>
          <!-- thead Starts -->
          <tr>
            <th>Skill On
            </th>
            <th>Percentage
            </th>
            <th>Delete
            </th>
          </tr>
        </thead>
        <!-- thead Ends -->
        <tbody>
          <!-- tbody Starts -->
          <?php
            $get_skills = "SELECT * FROM `skills`";
            $run_skills = mysqli_query($con,$get_skills);

            while($row_skills = mysqli_fetch_array($run_skills)){
            $skills_id = $row_skills['id'];
            $skills_name = $row_skills['name'];
            $skills_percentage = $row_skills['percentage'];
          ?>
            <tr class="card white-grey darken-1 hoverable">
              <td style="color: darkblue;">
                <strong><?php echo $skills_name; ?></strong>
              </td>
              <td style="color: green;">
                <strong><?php echo $skills_percentage; ?> %</strong>
              </td>
              <td>
                <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?skills_delete=<?php echo $skills_id; ?>">
            <i class="material-icons">delete</i>
          </a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
        <!-- tbody Ends -->
      </table>
      <!-- table table-bordered table-hover table-striped Ends -->

      <!--Main coading of View All skills Ends-->


      <form method="post" action="index.php?skills_add" class="col s12">
        <div class="card white-grey darken-1">
          <div class="card-content">
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">edit</i>
                <input id="skills_name" name="skills_name" type="text" class="validate" required>
                <label for="skills_name">Skill Name</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">lightbulb_outline</i>
                <input id="skills_precentage" name="skills_precentage" type="number" placeholder="Max: 100" class="validate" data-length="3" required>
                <label for="skills_precentage">Skill Percentage</label>
              </div>
            </div>
            <div style="display: flex; justify-content: center;">
              <button type="submit" name="submit" class="btn waves-effect waves-light">Add Skill</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </section>
  <?php }  ?>
