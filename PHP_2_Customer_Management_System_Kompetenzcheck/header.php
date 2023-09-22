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
?>

<body class="font-[poppins] bg-gradient-to-r from-blue-950 to-green-900 h-screen">

    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 " aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="">
                    <img class="h-10 w-auto" src="./images/Huma.png" alt="">
                </a>
            </div>
            <div class=" lg:flex lg:gap-x-12  ">
                <div dir="ltr">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-blue-900 p-3 lg:rounded-s-lg hover:text-white">other products</a>
                </div>
                <div>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-cyan-900 p-3 hover:text-white">Comments</a>
                </div>
                <div>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-emerald-900 p-3 hover:text-white">Features of our service</a>
                </div>
                <div dir="rtl">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-green-900 p-3 lg:rounded-s-lg hover:text-white">About us</a>
                </div>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="./index.php" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>

    </header>
