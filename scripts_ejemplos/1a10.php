<?php

    echo "<b>Lista de numeros con While</b>";
    echo "<table border='1' cellpadding='10' cellspacing='2'>";
    $i= 1;
    while ($i <= 10)
    {
      //echo "<td><br>".$i."</td></tr>";
       //$i=$i +1
      if ($i%2==0) {
      echo "<td bgcolor='GREEN'>".$i. "</td>";

      }else {
        echo "<td bgcolor='YELLOW'>".$i ."</td>";
      }
      $i++;
    }
    echo "</table>";

?>
