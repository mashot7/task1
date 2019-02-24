<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'z_site');
if ($connection == false) {
  echo "Can't connect to database!";
  echo mysqli_connect_error();
  exit();
}
