<html>

  <head>
    <title> SERIE </title>
    </head>

  <body background ="D:\myrepo\images\hola.png">

<form name="frm1" action="serie.php" method="POST">
<table border="0" align="center">
  <tr>
    <td align="center" ><font face="Book Antiqua" size="3" color="BLACK"<b><b>Dijite un numero</font>
    <input type="number" name="num1"  placeholder="Numero 1" required><br></td>

  </tr>

  <td colspan="2" align="center"><br> <center><input type ="submit" value="Procesar"></center></td>

</table>
</form>

  </body>

</html>


<?php

$n1 = $_POST['num1'];

    echo "<b>El numero es: <b>".$n1;
    echo "<b><br>Lista de numeros Asendente</b>";

    echo "<table border='1' cellpadding='10' cellspacing='2'>";
    $i = $n1;
    while ($i > 0)
    {
      if ($i%2==0) {
      echo "<td bgcolor='#A1D7DA'>".$i. "</td>";

      }else {
        echo "<td bgcolor='#A1D7DA'>".$i ."</td>";
      }
      $i--;
    }
    echo "</table>";


    echo "<b>Lista de numeros Desendente</b>";
    echo "<table border='1' cellpadding='10' cellspacing='2'>";
    $i=1;
    while ($i <= $n1){
      if ($i%2==0) {
      echo "<td bgcolor='#A1D7DA'>".$i. "</td>";

      }else {
        echo "<td bgcolor='#A1D7DA'>".$i ."</td>";
      }
    //echo "<tr><td>". $i."</td></tr>";

      $i++;
    }
    echo "</table>";


?>
