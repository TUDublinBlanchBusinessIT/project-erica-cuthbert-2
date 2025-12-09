<?php
$servername = "localhost";
$username = "root";
$password = "db2025";
$dbname = "database1";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);

echo "<TABLE border='1'>";
for ($i = 0; $i <= 4; $i++) {
  echo "<tr>";
  for ($j = 0; $j <= 4; $j++) {
    echo "<td>$i, $j</td>";
  }
  echo "</tr>";
}
echo "</TABLE>";

echo "<TABLE>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<TR><TD>" . $row['firstname'] . "</TD><TD>" . $row['lastname'] . "</TD></TR>";
}
echo "</TABLE>";

mysqli_close($conn);

$sql = "INSERT INTO MyGuests (firstname, lastname,)
VALUES ('Jane', 'Doe')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
