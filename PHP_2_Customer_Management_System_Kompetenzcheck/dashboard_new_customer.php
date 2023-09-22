<?php
include_once './header-after-logged-in.php';
?>
<main>


    <section class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">

                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        <h2 class="mb-8 text-2xl text-cyan-400 font-bold">Welcome!<br>you can create Custoemers here</h2>
                    </div>

                    <form action="./dashboard_Create_Client_func.php" method="post">
                        <div class="mt-16 grid space-y-4">
                            <label for="company_name" class="text-white">Company Name:</label>
                            <input name="company_name" type="text" id="company_name" required class="group h-12 px-6 border-2 border-red-300 rounded-full transition duration-300 
                                    over:border-blue-400 focus:bg-blue-50 active:bg-blue-100">

                            <label for="contact_person" class="text-white">Contact Person</label>
                            <input name="contact_person" type="text" id="contact_person" required class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                     hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">


                            <label for="phone" class="text-white">Phone</label>
                            <input name="phone" type="tel" id="phone" required class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                     hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">

                            <label for="address" class="text-white">address</label>
                            <input name="address" type="text" id="address" required class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                     hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">

                            <label for="created_at" class="text-white">Created at</label>
                            <input name="created_at" type="date" id="created_at" required class=" group h-12 px-6 border-2 border-green-700 rounded-full transition duration-300 
                                     hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">

                            <label for="edited_at" class="text-white">Edited at</label>
                            <input name="edited_at" type="date" id="edited_at" required class="group h-12 px-6 border-2 border-yellow-300 rounded-full transition duration-300 
                                     hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                            <button type="submit" class="rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white text-center">Create the Client</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <form action="dashboard_Overview.php" method="post">
                        <div class="mt-16 grid space-y-4">
                            <button type="submit" name="dashboard" class="rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-green-800 border-blue-900 text-white text-center">Go to the dashboard</button>
                        </div>
                    </form>
                    <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                        <p class="text-xs">By proceeding, you agree to our <a href="#" class="underline">Terms of Use</a> and confirm you have read our <a href="#" class="underline">Privacy and Cookie Statement</a>.</p>
                        <p class="text-xs">This site is protected by the will of god and the 7 Deities</p>
                    </div>
                </div>

        </div>
    </section>
</main>
</body>

</html>