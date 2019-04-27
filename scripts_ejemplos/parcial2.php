<html>
<body bgcolor="91C7AE">
<form name=frm1 action="parcial2.php" method="POST">

<table border="0" align="center">

  <td align=center> <font face="Times New Roman" size="4" color="black"<b><b> Ingrese la cantidad de dinero: </b></b></td></font>
  <td align=center><input type="number" name="cantidad" placeholder="Digite cantidad">
    <br></table></br>
    <center><input type="submit" value="Procesar"></center>
</form>
<img src="icons/mon.png" width="500" height="100" >
</body>
</html>





<?php
          $din=$_POST['cantidad'];
          echo "<p>El cambio de la cantidad ".$din." es:</p>";

                  // indicamos todas las monedas posibles

          $monedas=array(100, 50, 20, 10, 5,1);

          // creamos un array con la misma cantidad de monedas

          // Este array contendra las monedas a devolver

          $cambio=array(0,0,0,0,0,0);

          // Recorremos todas las monedas

          for($i=0; $i<count($monedas); $i++)

          {

              // Si el importe actual, es superior a la moneda

              if($din>=$monedas[$i])

              {

                  // obtenemos cantidad de monedas

                  $cambio[$i]=floor($din/$monedas[$i]);

                  // actualizamos el valor del importe que nos queda por didivir

                  $din=$din-($cambio[$i]*$monedas[$i]);

              }

          }

          // Bucle para mostrar el resultado

          for($i=0; $i<count($monedas); $i++)

          {

              if($cambio[$i]>0)

              {

                  if($monedas[$i]>=5)

                      echo "Hay: ".$cambio[$i]." Monedas de <b>".$monedas[$i]."</b><br>";

                  else

                      echo "Hay: ".$cambio[$i]." Monedas de ".$monedas[$i]."<br>";

              }

          }

          ?>
