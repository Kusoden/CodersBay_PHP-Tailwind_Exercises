<?php
include_once './header.php';
require_once './db/db_connection.php';


if (isset($_SESSION['delete_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['delete_error'] . '</div>';
    unset($_SESSION['delete_error']);
} elseif (isset($_SESSION['update_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['update_error'] . '</div>';
    unset($_SESSION['update_error']);
}

?>

<?php

$sql = $pdo->query("SELECT * FROM clients")->fetchall(PDO::FETCH_ASSOC);

?>
<main class="displayClients">
    <?php
    foreach ($sql as $row) : ?>

        <form action="./delete.php" method="post" id="item<?php echo $row['company_id']; ?>">
            <div class="card">
                <div class="card-body">
                    <h2><i><?php echo $row['company_name']; ?></i></h2>
                    <p><i>Contact Person: <?php echo $row['contact_person']; ?></i></p>
                    <p><i>Phone: <?php echo $row['phone']; ?></i></p>
                    <p><i>Address: <?php echo $row['address']; ?></i></p>
                    <p><i>Created By: <?php echo $row['created_by']; ?></i></p>
                    <p><i>Created At: <?php echo $row['created_at']; ?></i></p>
                    <p><i>Edited At: <?php echo $row['edited_at']; ?></i></p>
                </div>
                <div class="card-body">
                    <a href="./edit_page.php?comp=<?= $row['company_id']; ?>" class="btn btn-primary">Update Client</a>
                    <input type="hidden" name="company_id" value="<?= $row['company_id']; ?>">
                    <button type="submit" class="btn btn-primary">Delete Client</button>

                </div>
            </div>
        </form>
    <?php endforeach; ?>
</main>
    
        <form action="dashboard_new_customer.php" method="post">
            <button type="submit" name="dashboard">dashboard</button>
        </form>
</body>
<?php
if (isset($_SESSION['delete_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['delete_error'] . '</div>';
    unset($_SESSION['delete_error']);
} elseif (isset($_SESSION['update_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['update_error'] . '</div>';
    unset($_SESSION['update_error']);
}

?>
</html>