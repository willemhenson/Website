<?php session_start();
if (isset($_SESSION["validated"])) {
    if ($_SESSION["validated"] != "y") {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}
?>