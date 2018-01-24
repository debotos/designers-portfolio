<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
 <section class="content">
  <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
    <h1 class="page-announce-text valign">Messages </h1>
  </div>
  <!--Main coading of Messages Start-->
   <div style="margin-left: 3%; margin-right: 3%;">
    <table class="responsive-table centered highlight bordered">
    <!-- table table-bordered table-hover table-striped Starts -->
    <thead>
      <!-- thead Starts -->
      <tr>
        <th>From
        </th>
        <th>Email
        </th>
        <th>Subject
        </th>
        <th>Messages
        </th>
        <th>Delete
        </th>
      </tr>
    </thead>
    <!-- thead Ends -->
    <tbody>
      <!-- tbody Starts -->
      <?php
        $get_messages = "SELECT * FROM `message`";
        $run_messages = mysqli_query($con, $get_messages);
        while($row_messages = mysqli_fetch_array($run_messages)){
        $messages_id = $row_messages['id'];
        $messages_name = $row_messages['name'];
        $messages_email = $row_messages['email'];
        $messages_subject = $row_messages['subject'];
        $messages_message = $row_messages['message'];
      ?>
      <tr class="card white-grey darken-1 hoverable">
        <td style="color: green; border: 2px solid yellow;">
          <strong><?php echo $messages_name; ?></strong>
        </td>
        <td style="color: orange;">
          <strong><?php echo $messages_email; ?></strong>
        </td>
        <td style="color: indigo; border: 2px solid yellow;">
          <strong><?php echo $messages_subject; ?></strong>
        </td>
        <td style="color: darkblue;">
          <strong><?php echo $messages_message; ?></strong>
        </td>
        <td>
          <a class="btn-floating btn-small waves-effect waves-light red" href="index.php?messages_delete=<?php echo $messages_id; ?>">
            <i class="material-icons">delete</i>
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
    <!-- tbody Ends -->
  </table>
</div>
  <!--Main coading of Messages Ends-->
</section>
<?php }  ?>