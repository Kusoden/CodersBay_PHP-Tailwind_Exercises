<?php
include_once './header.php';
require_once './db/db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $password]);
header("Location: index.php");
?>
</body>
</html>