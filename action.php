<?php
session_start();

if ($_GET['cmd']== 'logout') {
    session_destroy();
    header('location: index.php');
}

if ($_GET['cmd'] == 'delete') {
    include_once 'include/connect.php';
    $id = $_GET['id'];
    $count = mysqli_query($connection, "DELETE FROM `feedback` WHERE `id`='$id'");

    header('location: admin.php');
}