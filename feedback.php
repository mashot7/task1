<?php  include_once 'include/header.php'; ?>
<script>
    $(function () {
    // feedback
    $('form').submit(function () {
        var firstname = $('input[name=firstname]').val();
        var lastname = $('input[name=lastname]').val();
        var email = $('input[name=email]').val();
        var message = $('textarea[name=message]').val();
        if (firstname == '' || lastname == '' || email == '' || message.trim() == '') {
            alert('Fill in required fields - *');
            return false;
        }
    });
    });
</script>
    <form action="handle.php?cmd=feedback" method="post">
        <p><input type="text" name="firstname" placeholder="First Name"></p>
        <p><input type="text" name="lastname" placeholder="Last Name"></p>
        <p><input type="email" name="email" placeholder="Email"></p>
        <p><textarea name="message" placeholder="Leave feedback."></textarea></p>
        <button type="submit">Sent</button>
        <ul>
            <li><a href="index.php">Go back</a></li>
        </ul>
    </form>
<?php  include_once 'include/footer.php'; ?>

