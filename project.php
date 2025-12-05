<?php
$servername = "tennisclub";
$username = "root";
$password = "pass";
$dbname = "createTennisClubDB.sql";
$port = 3306;


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
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $fname = $row['Firstname'];
        $sname = $row['Surname'];
        echo "<TR><TD>$fname</TD><TD>$sname</TD></TR>";
      }
      echo "</TABLE>"

    ?>
  </body>
</html>