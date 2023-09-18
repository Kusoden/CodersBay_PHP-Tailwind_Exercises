<?php
require_once './db/db_connection.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['company_id'])) {
        if($_POST['company_id'] == $_SESSION['user_id']){
        $company_id = $_POST['company_id'];

        $stmt = $pdo->prepare("DELETE FROM clients WHERE company_id = ?");
        $stmt->execute([$company_id]);

        header("Location: dashboard_Overview.php");
        exit();
        }
        else{
            echo "couldnt";
        }
    } else {
        echo "No company_id provided for deletion.";
    }
} else {
    echo "Invalid request.";
}
