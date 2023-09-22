<?php
require_once './db/db_connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_id = $_POST['company_id'];

    $stmt = $pdo->prepare("SELECT created_by FROM clients WHERE company_id = ?");
    $stmt->execute([$company_id]);
    $client = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($client['created_by'] == $_SESSION['user_id']) {

        $stmt = $pdo->prepare("DELETE FROM clients WHERE company_id = ?");
        $stmt->execute([$company_id]);

        header("Location: dashboard_Overview.php");
        exit();
    } else {
        $_SESSION['delete_error'] = "You are not allowed to delete it";
        header("Location: dashboard_Overview.php");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
