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
    ?>
  </body>
</html>