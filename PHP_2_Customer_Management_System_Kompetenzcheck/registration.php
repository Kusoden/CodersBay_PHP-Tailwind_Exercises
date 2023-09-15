
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="registerCheck_func.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">email:</label>
        <input type="email" email="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>