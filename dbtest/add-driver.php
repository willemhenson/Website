<?php
$run = TRUE;
$json = "{";
$count = 1;
for ($i = 1; $i <= $_GET['num']; $i++) {
    $json = $json . ('"' . $_GET['key' . $i] . '":"' . $_GET['value' . $i] . '",');
}
$json = substr($json,0,strlen($json)-1);
$json = $json . "}";
echo $json;
?>

<?php
$n=4;
$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$id = '';
for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $id .= $characters[$index];
}

?>


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

$sql =  "INSERT INTO main (id, json) VALUES ('" . $id . "', '" . $json . "')";

if ($conn -> query($sql) === TRUE) {
    echo ("New record added");
} else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
}

$conn -> close();

header('Location: ./index.php');

?>