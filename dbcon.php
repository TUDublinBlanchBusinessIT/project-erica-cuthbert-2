
//$servername = "localhost";
//$username = "root";
//$password = "db2025";
//$dbname = "database1";
//$port = 3307;

//$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

//if (!$conn){
   // die("Failed: " . mysqli_connect_error());
//}

<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "gp_surgery";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
