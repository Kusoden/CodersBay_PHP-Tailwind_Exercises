<?php
session_start();
?>

<?php
include './header.php'
?>

<?php
$_SESSION['username'] = 'Ferzan';
$_SESSION['email'] = 'Ferzan@mail.com';

echo 'Hello, ' . $_SESSION['username'] . '!<br>';
echo 'Your email is ' . $_SESSION['email'] . '.<br>';
?>


</body>
</html>