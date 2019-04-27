<html>
<body bgcolor="91C7AE">
<form name=frm1 action="parcial2.php" method="POST">

<table border="0" align="center">

  <td align=center> <font face="Times New Roman" size="4" color="black"<b><b> Ingrese la cantidad de dinero: </b></b></td></font>
  <td align=center><input type="number" name="cantidad" placeholder="Digite cantidad">
    <br></table></br>
    <center><input type="submit" value="Procesar"></center>
</form>
<img src="icons/mon1.png" width="500" height="100" >
</body>
</html>





<?php
          $din=$_POST['cantidad'];
          echo "<p>El cambio de la cantidad <b>".$din."</b> es:</p>";

          $monedas=array(100, 50, 20, 10, 5,1);
          $cambio=array(0,0,0,0,0,0);

          for($i=0; $i<count($monedas); $i++)
          {
              if($din>=$monedas[$i])
              {
                  $cambio[$i]=floor($din/$monedas[$i]);
                  $din=$din-($cambio[$i]*$monedas[$i]);
              }
          }

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
