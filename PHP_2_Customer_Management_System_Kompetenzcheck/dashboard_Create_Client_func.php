<?php
include_once './header.php';
require_once './db/db_connection.php';

$company_name = $_POST['company_name'];
$contact_person = $_POST['contact_person'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$created_by = $_POST['created_by'];
$created_at = $_POST['created_at'];
$edited_at = $_POST['edited_at'];

$sql = "INSERT INTO clients (company_name, contact_person, phone, address, created_by, created_at, edited_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$company_name, $contact_person, $phone, $address, $created_by, $created_at,$edited_at]);
header("Location: dashboard_Overview.php");
?>
</body>
</html>