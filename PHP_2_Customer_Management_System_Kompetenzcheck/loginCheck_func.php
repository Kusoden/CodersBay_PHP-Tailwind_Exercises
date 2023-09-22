<?php
include_once './header.php';
require_once './db/db_connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT user_id, name, password FROM `users` WHERE `email`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        header("location: dashboard_new_customer.php");
        exit;
    } else {
        $_SESSION['login_error'] = "Invalid Email or Password. Please try again.";
        header("Location: index.php");
        exit;
    }
}

if (isset($_SESSION['login_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']);
}

?>