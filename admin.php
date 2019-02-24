<?php
session_start();

// check username and password
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    if ($_SESSION['username'] != 'admin' && $_SESSION['password'] != '123') {
        header('location: login.php');
        exit();
    }
} else {
    header('location: login.php');
    exit();
}

require_once('./include/connect.php');

include_once 'include/header.php';
 ?>

  <nav>
    <ul>
      <li><a href="action.php?cmd=logout">Logout</a></li>
    </ul>
  </nav>

    <table style="width:100%">
    <tr>
      <th>Sent date</th>
      <th>First name</th>
      <th>Last name</th>
      <th>E-mail</th>
      <th>Message</th>
      <th colspan="2">Action</th>
    </tr>
<?php


$count_feedback = mysqli_query($connection, "SELECT * FROM `feedback`");
while ($row_feedback = mysqli_fetch_assoc($count_feedback)) {
  $firstName = $row_feedback['firstName'];
  $lastName = $row_feedback['lastName'];
  $email = $row_feedback['email'];
  $date = $row_feedback['date'];
  $message = mb_substr($row_feedback['message'], 0, 600).'...';
  $id = $row_feedback['id'];
?>

      <?php echo "<tr>
                    <td>$date</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$email</td>
                    <td>$message</td>
                    <td style='text-align: center;'><a href='action.php?cmd=delete&id=$id'><i class='material-icons' style='color:red;'>delete_forever</i></a></a></td>
                    <td style='text-align: center;'><a href='item.php?id=$id'><i class='material-icons' style='color: blue;'>remove_red_eye</i></a></td>
                  </tr>"
      ?>

<?php } ?>
  </table>
<?php include_once 'include/footer.php';
