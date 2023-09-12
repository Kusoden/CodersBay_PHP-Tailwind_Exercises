<?php
include './header.php'
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $email = $_POST["email"];

    echo "The data was received using the POST method.<br>";
    echo "Text: ".$text."<br>";
    echo "Email: ".$email."<br>";
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["text"];
    $email = $_GET["email"];

    echo "The data was received using the GET method.<br>";
    echo "Text: ".$text."<br>";
    echo "Email: ".$email."<br>";
}

?>

<body>