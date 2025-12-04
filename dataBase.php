<?php
$servername= "localhost";
$username = "username";
$password = "password";
$dbname = "myDB"

$conn = mysqli_connect($servername, $username, $password, $dbname )

if (!$conn){
    die("Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUE ('Jane', 'Doe', 'janedoe@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" : mysqli_connect($conn);
}

mysqli_close($conn);
?>