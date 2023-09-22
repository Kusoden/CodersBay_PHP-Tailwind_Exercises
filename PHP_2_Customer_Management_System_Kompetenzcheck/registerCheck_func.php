<?php
include_once './header.php';
require_once './db/db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $hashedPassword]);
header("Location: index.php");
?>
</body>
</html>