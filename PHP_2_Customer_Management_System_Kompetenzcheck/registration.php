<?php
require_once('./db/db_connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $servername = "localhost";
    $database = "PHP2";
    $email = "email";
    $name = "name";
    $password = "password";

    $conn = mysqli_connect($servername, $email, $name , $password, $database);

    if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "INSERT INTO users (email, name, password) VALUES ($Session, 'Jackson', 'tom@jackson.tld')";

    if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    header("Location: login.php");
}
?>

<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" required><br><br>

        <label for="email">email:</label>
        <input type="email" email="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>