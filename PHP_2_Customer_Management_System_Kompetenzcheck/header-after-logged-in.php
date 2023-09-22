<!DOCTYPE html>
<html lang="en" class="m-0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 Customer Managment Kompetenzcheck</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><!-- both links toward up should be taken for ionicons -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];
} else {

    header("location: index.php");
    exit;
}
?>

<body class="font-[poppins] bg-gradient-to-r from-blue-950 to-black h-screen">

    <header class="bg-white">
        <nav class="mx-auto lg:flex lg:items-center lg:justify-between lg:py-4  " aria-label="Global">
            <h1>Logged in as:<?= $user_name?>, with id: <?= $user_id?></h1>
            <div class="flex lg:flex-1 ">
                <a href="#" class=""><img class="h-10 w-auto" src="./images/Huma.png" alt=""></a>
            </div>

            <div class=" lg:flex lg:gap-x-12">
                <div dir="ltr">
                    <a href="./dashboard_Overview.php" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-blue-900 p-3 lg:rounded-s-lg hover:text-white">All Customers/Dashboard</a>
                </div>
                <div>
                    <a href="./dashboard_new_customer.php" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-cyan-900 p-3 hover:text-white">Create new Customer</a>
                </div>
                <div>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-emerald-900 p-3 hover:text-white">Features of our service</a>
                </div>
                <div dir="rtl">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-green-900 p-3 lg:rounded-s-lg mt-3 hover:text-white">About us</a>
                </div>
            </div>
            
            <div class=" lg:flex lg:flex-1 lg:justify-end">
                <form action="dashboardLogOut_func.php" method="post">
                    <button type="submit" name="logout" class="bg-red-600 text-white p-2">log out</button>
                </form>
            </div>
        </nav>



    </header>
