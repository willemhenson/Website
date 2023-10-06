<!DOCTYPE html>
<html>
<?php require('clones/head.php'); ?>
<body>
    <header>
        welcome to my personal website. please use passkey to view.
    </header>
    <main>
        <p>
        <form action="logic/login_driver.php" method="post">
            <label for="passkey">passkey</label>
            <input type="text" name="passkey">
            <input type="submit">
        </form>
        </p>
        <p><?php session_start();
            if (isset($_SESSION["validated"])) {
                if ($_SESSION["validated"] != "y") {
                    echo "incorrect";
                }
            }
        ?></p>
    <main>
</body>
</html>