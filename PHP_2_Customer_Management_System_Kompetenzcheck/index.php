<?php
include_once './header.php';
?>
    <main>
        <form action="./loginCheck_func.php" method="post">
            <div class="bg-red-800" >email: <input type="text" name="email" required></div>
            <div>Password: <input type="password" name="password" required></div>
            <div class="wrap">
                <button type="submit" class="button">Log in</button>
            </div>
        </form>
        <a href="registration.php">JOIN US!</a>
    </main>

<?php
include_once './footter.php'
?>