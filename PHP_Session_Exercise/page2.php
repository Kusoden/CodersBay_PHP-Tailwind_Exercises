<?php
session_start();
?>
<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo 'Hello again,from page 2 ' . $username . '!<br>';
echo 'Your email is still ' . $email . '.<br>';
?>
