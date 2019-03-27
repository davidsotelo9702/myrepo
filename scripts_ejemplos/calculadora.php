<?php
//Mi calculadora basica
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['operar'];



echo "Numero 1: ". $n1;
echo "<br>Numero 2: ". $n2;


switch ($op) {
  case '1':
      echo "<br>La suma es: ". ($n1+$n2);
      break;
  case '2':
      echo "<br>La resta es: ". ($n1-$n2);
      break;
  case '3':
      echo "<br>La multiplicaion es: ". ($n1*$n2);
      break;
  case '4':
      echo "<br>La división es: ". ($n1/$n2);
      break;
  case '5':
      echo "<br>La potecia es: ". ($n1*$n1);
      echo "<br>La potecia es: ". ($n2*$n2);
      break;
  case '6':
      echo "<br>La Raiz es: ". sqrt($n1);
      echo "<br>La Raiz es: ". sqrt($n2);
      break;
  case '7':
          echo "<br>La suma es: ". ($n1+$n2);
          echo "<br>La resta es: ". ($n1-$n2);
          echo "<br>La multiplicaion es: ". ($n1*$n2);
          echo "<br>La división es: ". ($n1/$n2);
          echo "<br>La potecia es: ". ($n1*$n1);
          echo "<br>La potecia es: ". ($n2*$n2);
          echo "<br>La Raiz es: ". sqrt($n1);
          echo "<br>La Raiz es: ". sqrt($n2);

          break;

  default:
    # code...
    break;
}

 ?>
