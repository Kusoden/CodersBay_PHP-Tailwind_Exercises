<?php
include_once './header.php';
?>
<section class="min-h-screen p-6  flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <h2 class="font-semibold text-xl text-gray-300">User Registration</h2>
        <form action="registerCheck_func.php" method="post" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 ">
            <label for="name">Name:</label>
            <input type="text" name="name" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"><br><br>

            <label for="email">email:</label>
            <input type="email" email="email" name="email" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"><br><br>

            <input type="submit" value="Register" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
</section>
</body>

</html>