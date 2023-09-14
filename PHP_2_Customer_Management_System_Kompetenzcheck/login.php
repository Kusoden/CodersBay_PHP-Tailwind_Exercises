<?php
include './header.php'
?>
<?php
require_once('./db/db_connection.php');

session_start();

$name = /* there should be the data base data */;
$password = ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inp_email = $_POST['email'];
    $inp_password = $_POST['password'];

    if ($inp_name == $name && $inp_password == $password) {
        $_SESSION['name'] = $inp_name;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid name or password.try again";
    }
}
?>
