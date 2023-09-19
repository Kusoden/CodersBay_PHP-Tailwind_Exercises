<?php
include_once './header.php';
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
        $adress = $clientData['adress'];
        $created_by = $clientData['created_by'];
        $created_at = $clientData['created_at'];
        $edited_at = $clientData['edited_at'];
    }
}
?>

<main>

    <form action="./edit.php" method="post">
        <div class="container">
            <h2>Update Clients</h2>
            <label for="company_name">Company Name</label>
            <input name="company_name" type="text" id="company_name" value="<?= $company_name ?>">

            <label for="contact_person">Contact Person</label>
            <input name="contact_person" type="text" id="contact_person" value="<?= $contact_person ?>">

            <label for="phone">Phone</label>
            <input name="phone" type="text" id="phone" value="<?= $phone ?>">

            <label for="address">Address</label>
            <input name="address" type="text" id="address" value="<?= $address ?>">

            <label for="created_by">Created by</label>
            <input name="created_by" type="text" id="created_by" value="<?= $created_by ?>">

            <label for="created_at">Created at</label>
            <input name="created_at" type="date" id="created_at" value="<?= $created_at ?>">

            <label for="edited_at">Edited at</label>
            <input name="edited_at" type="date" id="edited_at" value="<?= $edited_at ?>">
            <br>
            <input type="hidden" name="company_id" value="<?= $company_id ?>">
            <button name="updateButton" type="submit" href="./edit.php">UPDATE</button>

        </div>
    </form>
</main>
</body>

</html>