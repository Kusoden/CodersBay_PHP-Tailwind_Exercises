<?php
include './header.php'
?>
<?php
session_start();

$username = "Ferzan";
$password = "youcantfindthepassword";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inp_username = $_POST['username'];
    $inp_password = $_POST['password'];

    if ($inp_username == $username && $inp_password == $password) {
        $_SESSION['name'] = $inp_username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.try again";
    }
}
?>
