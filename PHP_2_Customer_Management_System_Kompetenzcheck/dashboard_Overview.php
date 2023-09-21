<?php
include_once './header-after-logged-in.php';
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
<main class="displayClients ">

    <form action="./delete.php" method="post" id="item<?php echo $row['company_id']; ?>">
        <div class="container mx-auto mt-10"> <!-- w-full md:w-1/2 p-5 md:px-0 mx-5  -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"> <!-- from-blue-950 to-green-900 border border-sky-500 w-full lg:w-1/2 h-full p-5 pt-8 -->
                <?php foreach ($sql as $row) : ?>
                    <div class="p-6 rounded-lg shadow-lg text-white hover:bg-cyan-500 hover:text-white transition-transform transform hover:scale-105 bg-gradient-to-r from-purple-600 via-purple-500 to-teal-500" style="background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);">
                        <h2 class="text-white bg-sky-600"><i><?php echo $row['company_name']; ?></i></h2>
                        <p class="text-white"><i>Contact Person: <?php echo $row['contact_person']; ?></i></p>
                        <p class="text-white"><i>Phone: <?php echo $row['phone']; ?></i></p>
                        <p class="text-white"><i>Address: <?php echo $row['address']; ?></i></p>
                        <p class="text-white"><i>Created By: <?php echo $row['created_by']; ?></i></p>
                        <p class="text-white"><i>Created At: <?php echo $row['created_at']; ?></i></p>
                        <p class="text-white"><i>Edited At: <?php echo $row['edited_at']; ?></i></p>
                    </div>
                    <div class="card-body">
                        <a href="./edit_page.php?comp=<?= $row['company_id']; ?>" class="btn btn-primary rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-purple-400 text-white">Update Client</a>
                        <input type="hidden" name="company_id" value="<?= $row['company_id']; ?>">
                        <button type="submit" class="btn btn-primary rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-red-600 text-white">Delete Client</button>
                    </div>

                    <!--                     <p class="text-white"><i>Edited At: <?php echo $row['edited_at']; ?></i></p><br>
                    <a href="./updateClients.php?comp=<?= $row['company_id']; ?>" class="hover:bg-gray-700 font-sans ml-2 rounded-md px-2 py-1">Update Client</a>
                    <input type="hidden" name="company_id" value="<?= $row['company_id']; ?>">
                    <button type="submit" class="hover:bg-gray-700 font-sans ml-2 rounded-md px-2 py-1">Delete Client</button>
                </div> -->
                
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </form>

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