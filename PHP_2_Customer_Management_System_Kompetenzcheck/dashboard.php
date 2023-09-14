<?php
session_start();


if (isset($_SESSION['username']) && !empty($_SESSION['name'])) {
    echo "Welcome, ".$_SESSION['name']."!";
} else {
    header("Location: index.html");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="index.html" method="post">
            <button type="submit" name="logout">log out</button>
        </form>
    </main>
</body>

</html>