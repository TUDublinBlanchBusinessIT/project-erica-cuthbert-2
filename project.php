<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gp_surgery";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include 'dbcon.php';

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$doctorID = $_POST['docid'];
$patientID = $_POST['ptntid'];
$cost = $_POST['cost'];

$sql = "INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
        VALUES ('$visitDate', '$visitTime', '$doctorID', '$patientID', '$cost')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
