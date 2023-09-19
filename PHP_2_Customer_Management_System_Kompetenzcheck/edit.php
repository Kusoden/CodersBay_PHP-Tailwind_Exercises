<?php
include_once './header.php';
require_once './db/db_connection.php';
session_start();

$company_id = $_POST['company_id'];
$stmt = $pdo->prepare("SELECT created_by FROM clients WHERE company_id = ?");
$stmt->execute([$company_id]);
$client = $stmt->fetch(PDO::FETCH_ASSOC);

if ($client['created_by'] == $_SESSION['user_id']) {

    if (isset($_POST['company_id'])) {
        $company_id = intval($_POST['company_id']);
        $company_name = $_POST['company_name'];
        $contact_person = $_POST['contact_person'];
        $phone = intval($_POST['phone']);
        $address = $_POST['address'];
        $created_by = intval($_POST['created_by']);
        $created_at = $_POST['created_at'];
        $edited_at = $_POST['edited_at'];



        $sql = "UPDATE clients SET company_name=:company_name, contact_person=:contact_person, phone=:phone, address=:address, created_by=:created_by, created_at=:created_at, edited_at=:edited_at WHERE company_id=:company_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':company_name', $company_name);
        $stmt->bindParam(':contact_person', $contact_person);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':created_by', $created_by);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':edited_at', $edited_at);
        $stmt->bindParam(':company_id', $company_id);

        if ($stmt->execute()) {

            header("location: displayClients.php");
            exit;
        } else {
            echo "couldnt update!.";
        }
    }
} else {
    echo "not possible!.";
}



?>
