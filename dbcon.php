<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "gp_surgery";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}

?>
