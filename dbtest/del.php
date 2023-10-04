<?php
$servername = "sql107.epizy.com";
$username = "epiz_33898798";
$password = "g5pxB4RdpVYC";
$dbname = "epiz_33898798_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
  die("Connection failed: " . $conn -> connect_error);
}
echo ("Connected successfully");

$sql =  "DELETE FROM main WHERE id='" . $_GET['id'] . "'";

if ($conn -> query($sql) === TRUE) {
    echo ("Record deleted successfully");
} else {
    echo ("Error: " . $sql . "<br>" . $conn -> error);
}

$conn -> close();

header('Location: ./index.php');

?>