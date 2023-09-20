<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 Customer Managment Kompetenzcheck</title>
</head>

<body>
<?php
require_once './db/db_connection.php';
    if (isset($_GET['comp'])) {
        $company_id = $_GET['comp'];
        $stmt = $pdo->prepare("SELECT * FROM clients WHERE company_id = ?");
        $stmt->execute([$company_id]);
        $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($clientData) {
            $company_name = $clientData['company_name'];
            $contact_person = $clientData['contact_person'];
            $phone = $clientData['phone'];
            $adress = $clientData['address'];
            $created_by = $clientData['created_by'];
            $created_at = $clientData['created_at'];
            $edited_at = $clientData['edited_at'];
        }
    }

?>

<main>
    <form action="./edit.php" method="post">
        <div class="container">
            <h2>update Clients</h2>

            <label for="company_name">Company Name</label>
            <input name="company_name" type="text" id="company_name">

            <label for="contact_person">Contact Person</label>
            <input name="contact_person" type="text" id="contact_person">

            <label for="phone">Phone</label>
            <input name="phone" type="tel" id="phone">

            <label for="address">address</label>
            <input name="address" type="text" id="address">

            <label for="created_at">Created at</label>
            <input name="created_at" type="date" id="created_at">

            <label for="edited_at">Edited at</label>
            <input name="edited_at" type="date" id="edited_at">
            <br>
            <input type="hidden" name="company_id" value="<?php echo $company_id ?>">
            <button type="submit">Submit</button>
        </div>
    </form>
    <form action="dashboard_Overview.php" method="post">
        <button type="submit" name="dashboard">dashboard</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="logout">log out</button>
    </form>
</main>
</body>

</html>