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

$sql = "SELECT * FROM main";
$result = $conn -> query($sql);

$results_html = "<tr><th>id</th><th>json</th></tr>";
if ($result -> num_rows > 0) {
    // output data of each row
    while ($row = $result -> fetch_assoc()) {
        $results_html = $results_html . ("<tr><td>" . $row["id"] . "</td><td>" . $row["json"] . "</td><td><button onclick=location.href='./del.php?id=" . $row["id"] . "'>X</button>");
    }
}

$results_html = $results_html . ("<tr><td><button onclick=location.href='./add.php'>+</button></td></tr>");

$conn -> close();
?>





<?php include('top.php'); ?>

    <div class="search-results"><table><?php echo($results_html) ?></table></div>

<?php include('bot.php'); ?>

