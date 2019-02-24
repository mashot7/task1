
<?php

require_once('./include/connect.php');

$id = $_GET['id'];

$count = mysqli_query($connection, "SELECT * FROM `feedback` WHERE `id`='$id'");
$row = mysqli_fetch_assoc($count);

if (mysqli_num_rows($count)>0) {
  $firstName = $row['firstName'];
  $lastName = $row['lastName'];
  $email = $row['email'];
  $date = $row['date'];
  $message = $row['message'];
} else {
  echo "Couldn't";
}


echo "<div style='width: 80%; margin: 20px auto;'>
        <p>First name: $firstName</p><br>
        <p>Last name: $lastName</p><br>
        <p>Email: $email</p><br>
        <p>Date: $date</p><br>
        <p>Message: $message</p><br>
      </div>";
?>
<ul>
  <li><a href="admin.php">Go back</a></li>
</ul>