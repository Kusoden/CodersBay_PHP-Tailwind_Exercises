<?php
include_once './header.php';
require_once './db/db_connection.php';

$data = $pdo->query("SELECT * FROM clients")->fetchall(PDO::FETCH_ASSOC);


foreach ($data as $row) : ?>
    <form action="delete.php" method="post" id="item<?php echo $row['company_id']; ?>">
        <!-- the data code will be generated -->
        <h2><?php echo $row['company_name']; ?></h2>
        <p>Contact Person: <?php echo $row['contact_person']; ?></p>
        <p>Phone: <?php echo $row['phone']; ?></p>
        <p>Address: <?php echo $row['address']; ?></p>
        <p>Created By: <?php echo $row['created_by']; ?></p>
        <p>Created At: <?php echo $row['created_at']; ?></p>
        <p>Edited At: <?php echo $row['edited_at']; ?></p>
        <p>Company ID: <?php echo $row['company_id']; ?></p>
        <!-- the code will be generated -->
        <a href="edit.php">Edit</a>
        <input type="hidden" name="company_id" value="<?php echo $row['company_id']; ?>">
        <button type="submit">Delete</button>
    </form>
    
<?php endforeach; ?>
        <form action="dashboard_new_customer.php" method="post">
            <button type="submit" name="dashboard">dashboard</button>
        </form>
</body>
</html>
