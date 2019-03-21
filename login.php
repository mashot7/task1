<?php

session_start();
require_once('./include/connect.php');

// login
if (isset($_POST['password'])&& isset($_POST['username'])) {

    // username and password
    $username = 'admin';
    $password = '123';

    // check username and password
    if ($_POST['password'] == $password && $_POST['username'] == $username) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: admin.php');
        exit();
    }
}


include_once 'include/header.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(function () {
    // feedback
    $('form').submit(function () {
        var username = $('input[name=username]').val();
        var password = $('input[name=password]').val();
        if (username == '' || password == '') {
            alert('Fill in required fields - *');
            return false;
        }
    });
});
</script>
    <form action="login.php" method="post">
        <p></p><input type="text" name="username" placeholder="Username" value="">
        <p></p><input type="password" name="password" placeholder="Password" value="">
        <p></p><button type="submit">Login</button>
        <ul>
            <li><a href="index.php">Go back</a></li>
        </ul>
    </form>
<?php include_once 'include/footer.php';
