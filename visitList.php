<?php
include 'dbcon.php';

$sql = "SELECT * FROM visit";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $visitDate = $row['visit_date'];
    $visitTime = $row['visit_time'];
    $patientID = $row['patient_id'];

    echo "<tr>
            <td>$visitDate</td>
            <td>$visitTime</td>
            <td>$patientID</td>
          </tr>";
}

mysqli_close($conn);
?>
