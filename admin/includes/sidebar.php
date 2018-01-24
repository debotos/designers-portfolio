<!--Getting the user details Starts-->
<?php
include("db.php");
$admin_session = $_SESSION['admin_email'];
$get_admin = "select * from admins  where admin_email='$admin_session'";
$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_image = $row_admin['admin_image'];
$admin_contact = $row_admin['admin_contact'];

$get_admin_count = "SELECT * FROM `admins`";
$run_admin_count = mysqli_query($con, $get_admin_count);
$admin_count = mysqli_num_rows($run_admin_count);

$get_messages = "SELECT * FROM `message`";
$run_messages = mysqli_query($con, $get_messages);
$message_count = mysqli_num_rows($run_messages);

$get_testimonial = "SELECT * FROM `testimonial`";
$run_testimonial = mysqli_query($con,$get_testimonial);
$testimonial_count = mysqli_num_rows($run_testimonial);

$get_design = "SELECT * FROM `design`";
$run_design = mysqli_query($con,$get_design);
$design_count = mysqli_num_rows($run_design);
?>
<!--Getting the user details Ends-->
<ul id="slide-out" class="side-nav fixed z-depth-4">
  <li>
    <div class="userView">
      <div class="background" style="background-color: black;">
      </div>
      <a href="#!user">
        <img class="circle" src="assets/img/admin/<?php echo $admin_image; ?>">
      </a>
      <a href="#!name">
        <span class="white-text name">Welcome back,
        </span>
      </a>
      <a href="#!email">
        <span class="white-text email">
          <?php echo $admin_name; ?>
        </span>
      </a>
    </div>
  </li>
  <li>
    <a class="active" href="index.php?dashboard">
      <i class="material-icons pink-item">dashboard
      </i>Dashboard
    </a>
  </li>
  <li>
    <div class="divider">
    </div>
  </li>
  
  <li><a href="index.php?about"><i class="material-icons pink-item">account_circle</i>About You</a></li>
  
  <li><a href="index.php?skills"><i class="material-icons pink-item">stars</i>Skills</a></li>
  
  <li><a href="index.php?what_i_do"><i class="material-icons pink-item">school</i>What I Do</a></li>
  
  <li>
    <a href="index.php?social_link_info">
      <i class="material-icons pink-item">info_outline
      </i>Social Link & Info
    </a>
  </li>
  
  <li><a href="index.php?messages"><i class="material-icons pink-item">markunread</i>Messages<span style="color: white;" class="badge red"><?php echo $message_count; ?></span></a></li>
  
  <li class="no-padding" style="margin-left: 15px;">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Manage Design
          <i class="material-icons pink-item">arrow_drop_down
          </i>
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="index.php?design_category">Category
              </a>
            </li>
            <li>
              <a href="index.php?all_designs">Designs<span style="color: white;" class="badge red"><?php echo $design_count; ?></span>
              </a>
            </li>
            <li>
              <a href="index.php?add_design">Add
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <div class="divider">
    </div>
  </li>
  <li class="no-padding" style="margin-left: 15px;">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">TESTIMONIALS
          <i class="material-icons pink-item">face
          </i>
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="index.php?testimonial_add">Add
              </a>
            </li>
            <li>
              <a href="index.php?testimonial_list">List<span style="color: white;" class="badge red"><?php echo $testimonial_count; ?></span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <div class="divider">
    </div>
  </li>
  <li class="no-padding" style="margin-left: 15px;">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Admin Management
          <i class="material-icons pink-item">people
          </i>
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="index.php?insert_new_admin">Insert
              </a>
            </li>
            <li>
              <a href="index.php?view_admins">View Admins<span style="color: white;" class="badge red"><?php echo $admin_count; ?></span>
              </a>
            </li>
            <li>
              <a href="index.php?edit_admin_profile=<?php echo $admin_id; ?>">Edit Current Profile
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <div class="divider">
    </div>
  </li>
  <li>
    <a href="logout.php">
      <i class="material-icons pink-item">remove_circle
      </i>Logout
    </a>
  </li>
</ul>
