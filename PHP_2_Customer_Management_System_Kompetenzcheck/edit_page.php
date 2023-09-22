<?php
include_once './header-after-logged-in.php';
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

<main class="flex justify-center bg-gradient-to-t from-blue-950 to-white h-full">
    <section class="md:flex md:items-center w-full sm:w- md:h-full xl:w-1/2 sm:rounded-lg md:rounded-none ">
        <div class=" w-full space-y-12">
            <div class=" flex flex-col border border-gray-900 rounded-lg px-8 py-10">
                <form action="./edit.php" method="post" class="flex flex-col space-y-8 mt-10">
                    <h2 class="mb-8 text-2xl text-black font-bold">update Clients</h2>

                    <label for="company_name" class="font-bold text-lg text-white ">Company Name</label>
                    <input name="company_name" type="text" id="company_name" class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white">

                    <label for="contact_person" class="font-bold text-lg text-white ">Contact Person</label>
                    <input name="contact_person" type="text" id="contact_person" class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white">

                    <label for="phone" class="font-bold text-lg text-white ">Phone</label>
                    <input name="phone" type="tel" id="phone" class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white">

                    <label for="address" class="font-bold text-lg text-white ">address</label>
                    <input name="address" type="text" id="address" class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white">

                    <label for="created_at" class="font-bold text-lg text-white ">Created at</label>
                    <input name="created_at" type="date" id="created_at" class="border rounded-lg py-3 px-3 mt-4 border-indigo-600 placeholder-white-500">

                    <label for="edited_at" class="font-bold text-lg text-white ">Edited at</label>
                    <input name="edited_at" type="date" id="edited_at" class="border rounded-lg py-3 px-3 mt-4 border-indigo-600 placeholder-white-500 ">
                    <br>
                    <input type="hidden" name="company_id" value="<?php echo $company_id ?>">
                    <button type="submit" class="border border-white bg-indigo-950 text-white rounded-lg py-3 font-semibold">Submit</button>
                </form>
            </div>
        </div>
    </section>
</main>
</body>

</html>