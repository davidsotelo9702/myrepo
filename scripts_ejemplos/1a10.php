<html>

  <head>
    <title> SERIE </title>
    </head>

  <body background ="D:\myrepo\images\hola.png">

<form name="frm1" action="1a10.php" method="POST">
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

echo "<br><b>Lista de numeros acendente y decendente</b></br>";
echo "<table border=1 cellpadding='9' style=float:left>";
$i=1;
 while  ($i<=$n1){
  if(($i%2)==0){
   echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
 }
 else{
   echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
 }
 $i++;
}
echo "</table>";
echo "<table border=1 cellpadding='9' style=float:left:200px >";
$i = $n1;
while  ($i>0){
 if(($i%2)==0){
   echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
 }
 else{
   echo "<tr bgcolor='E2E3AD'><td>".$i."</td></tr>";
 }
 $i--;
}
echo "</table>";



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


<?php
echo "<b>Numeros del 1 al 10 sin bucle</b><br>";
echo "<br> 1";
echo "<br> 2";
echo "<br> 3";
echo "<br> 4";
echo "<br> 5";
echo "<br> 6";
echo "<br> 7";
echo "<br> 8";
echo "<br> 9";
echo "<br> 10";
echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";



    echo "<br><b>Lista de numeros del 1 al 10</b><br><br>";
    echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
    $i= 1;
    while ($i <= 10)
    {
      echo "<td><br>".$i."</td>";
       //$i=$i +1
      // if ($i%2==0) {
      // echo "<td bgcolor='GREEN'>".$i. "</td>";
      //
      // }else {
      //   echo "<td bgcolor='YELLOW'>".$i ."</td>";
      // }
      $i++;
    }
    echo "</table>";
echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";

echo "<br><b>Lista de numeros del 1 al 100</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$i= 1;
while ($i <= 100)
{
  echo "<td><br>".$i."</td>";
   //$i=$i +1
  // if ($i%2==0) {
  // echo "<td bgcolor='GREEN'>".$i. "</td>";
  //
  // }else {
  //   echo "<td bgcolor='YELLOW'>".$i ."</td>";
  // }
  $i++;
}
echo "</table>";
echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";

echo "<br><b>Lista de numeros del 1 al 100 de 2 en 2</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$i= 0;
while ($i <= 100)
{
  echo "<td><br>".$i."</td>";
   //$i=$i +1
  // if ($i%2==0) {
  // echo "<td bgcolor='GREEN'>".$i. "</td>";
  //
  // }else {
  //   echo "<td bgcolor='YELLOW'>".$i ."</td>";
  // }
  $i+=2;
}
echo "</table>";


echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Lista de numeros aleatorios</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$i=1;
while ($i <= 10){
$a=rand(1,100) . "\n";
echo "<td><br>".$a."</td>";

$i++;
}
echo "</table>";

echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Suma de los primerosa 100 numeros</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$i=1;
while ($i <= 100){

  $sum=1;
  $sum+=$i;
  echo "<td><br>".$sum."</td>";

  $i++;
}
echo "</table>";


echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Numeros multiplos de 3 del 1 al 100</b><br><br>";

echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$i= 0;
while ($i <= 100)
{
  //echo "<td><br>".$i."</td>";


  if ($i%3==0) {
  echo "<td>".$i. "</td>";

  }else {

  }
  $i++;
}
echo "</table>";

echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Lista de numeros aleatorios</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$par=0;
$impar=0;
for ($i=1; $i<= 10 ; $i++) {
  $ale=rand(1,100);
  if ($ale%2==0) {
    $par=$par+1;
    //echo "<td>".$par."</td>";
  }
  else {
    $impar=$impar+1;
    //echo "<td>".$impar."</td>";
  }
  echo "<td>".$ale."</td>";
}

echo "</table>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
echo "<td>Total de numeros pares ".$par."</td>";
echo "<td>Total de numeros Impares ".$impar."</td>";
echo "</table>";


echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Lista de numeros aleatorios</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$par=0;
$impar=0;
for ($i=1; $i<= 10 ; $i++) {
  $ale=rand(-50,50);
  if ($ale%2==0 ) {
    $par=$par+1;
    //echo "<td>".$par."</td>";
  }
  else {
    $impar=$impar+1;
    //echo "<td>".$impar."</td>";
  }
  echo "<td>".$ale."</td>";

  if ($impar>0 && $par>0) {
    $pos=$par+1;
    //echo "<td>".$par."</td>";
  }
  else {
    $neg=$par+1;
    //echo "<td>".$impar."</td>";
  }
}

echo "</table>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
echo "<td>Total de numeros negativos ".$neg."</td>";
echo "<td>Total de numeros positivos ".$pos."</td>";
echo "<td>Total de numeros pares ".$par."</td>";
echo "<td>Total de numeros Impares ".$impar."</td>";
echo "</table>";
echo "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "<br><b>Lista de numeros aleatorios</b><br><br>";
echo "<table border='1' cellpadding='3.5' cellspacing='0.5'>";
$parposi=0;
$imparposi=0;
$parneg=0;
$imparneg=0;

for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(-300,300);
      echo "<td>".$aleatorio." </td>";

    if($aleatorio > 0  &&  ($aleatorio%2)==0){
      $parposi=$parposi+1;
    }else if ($aleatorio > 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
    $imparposi=$imparposi+1;
  }
  if($aleatorio < 0  &&  ($aleatorio%2)==0){
    $parneg=$parneg+1;
  }else if ($aleatorio < 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
  $imparneg=$imparneg+1;
}
}
echo "</table>";

  echo "<br><br>";
  echo "<table border=1>";
  echo "<tr><td> Total de Numeros postivos pares: </td> <td>".$parposi."</td></tr>";
  echo "<tr><td> Total de Numeros postivos impares: </td> <td>".$imparposi."</td></tr>";
  echo "<tr><td> Total de Numeros negativos pares: </td> <td>".$parneg."</td></tr>";
  echo "<tr><td> Total de Numeros negativos impares: </td> <td>".$imparneg."</td></tr>";
echo "</table>";

echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
 ?>

 <html>

     <head>
        <title> EJERCICIOS </title>
        </head>

     <body bgcolor="gray">  <br>
      <form name=frm1  method="POST">
          <table border="1" align="center">
            <tr>
                <td align=center> <font face="Arial" size="6" color="black"><b>SERIES</b></font> </td>
            </tr>

            <tr>
               <td font face="Trebuchet MS" size="3" > Digite numero: <font color="codigocolor"></font> </font> </td>
            </tr>

            <tr>
              <td> <input type="number" name="num1" placeholder="Digite numeror"required ><br></td>
            </tr>

          </table>
            <center><input  type="submit" value="Calcular"></center>

        </form>
     </body>
 </html>


 <?php

$n1=$_POST ["num1"];
echo "<table border =1 align = center>";
  for($i=1; $i<=10; $i++)
  {
    echo "<tr><td align=center>$n1</td>
              <td align=center>x</td>
              <td align=center>$i</td>
              <td align=center>=</td>
              <td align=center> ". ($i*$n1) . "</td>
          </tr>";
  }
  echo "</table> ";






?>
