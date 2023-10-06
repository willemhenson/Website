<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $passkey = $_POST["passkey"];
    $_SESSION["validated"] = "n";

    if ($passkey == "whenson31") {$_SESSION["validated"] = "y";} 
    
    header('Location: ../index.php');
}
?>