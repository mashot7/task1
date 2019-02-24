<?php
require_once('./include/connect.php');

if ($_GET['cmd']=='feedback') {
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
};


require_once('./include/connect.php');

$count = mysqli_query($connection, "INSERT INTO `feedback` (`firstName`, `lastName`, `email`, `message`, `date`)
                                    VALUES ('$firstName', '$lastName', '$email', '$message', now()) ");

echo "<h1>Thank you for submitting message!</h1><br><a href='feedback.php'>Go back.</a>";


?>
