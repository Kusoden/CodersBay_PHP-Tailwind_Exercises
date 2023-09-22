<?php
include_once './header-after-logged-in.php';
require_once './db/db_connection.php';


if (isset($_SESSION['update_error'])) {
    echo '<div class="flex items-center p-4 mb-4 text-red-500 text-center border-t-4   bg-gray-300 border-blue-800" role="alert">';
    echo '<div class="text-sm font-medium">';
    echo $_SESSION['update_error'];
    echo '</div>';
    echo '</div>';
    unset($_SESSION['update_error']);
}



if (isset($_SESSION['delete_error'])) {
    echo '<div class="flex items-center p-4 mb-4 text-red-500 text-center border-t-4   bg-gray-300 border-blue-800" role="alert">';
    echo '<div class="text-sm font-medium">';
    echo $_SESSION['delete_error'];
    echo '</div>';
    echo '</div>';
    unset($_SESSION['delete_error']);
}

?>

<?php

$sql = $pdo->query("SELECT * FROM clients")->fetchall(PDO::FETCH_ASSOC);

?>
<main class="displayClients m-4 ">

    <form action="./delete.php" method="post" id="item<?php echo $row['company_id']; ?>">
        <div class="container mx-auto mt-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"> <!--  border border-sky-500 w-full lg:w-1/2 h-full p-5 pt-8 -->
                <?php foreach ($sql as $row) : ?>
                    <div class=" p-6 rounded-lg shadow-lg text-white hover:bg-cyan-500 hover:text-white border-2 transition-transform transform hover:scale-105 bg-gradient-to-b from-blue-900 to-gray-600" ;">
                        <h2 class="text-white bg-sky-600"><i><?php echo $row['company_name']; ?></i></h2>
                        <p class="text-white"><i>Contact Person: <?php echo $row['contact_person']; ?></i></p>
                        <p class="text-white"><i>Phone: <?php echo $row['phone']; ?></i></p>
                        <p class="text-white"><i>Address: <?php echo $row['address']; ?></i></p>
                        <p class="text-white"><i>Created By: <?php echo $row['created_by']; ?></i></p>
                        <p class="text-white"><i>Created At: <?php echo $row['created_at']; ?></i></p>
                        <p class="text-white"><i>Edited At: <?php echo $row['edited_at']; ?></i></p>

                        <div>
                            <a href="./edit_page.php?comp=<?= $row['company_id']; ?>" class="btn btn-primary rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-white text-blue-700">Update Client</a>
                            <input type="hidden" name="company_id" value="<?= $row['company_id']; ?>">
                            <button type="submit" class="btn btn-primary rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-red-600 text-white">Delete Client</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </form>

</main>

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