<?php
//Comentario de una sola linea
/*Esto es
 un comentario 
 multilinea */

 //Imprimir en pantalla
 echo ("hola mundo");
 echo "<br/>hola cruel mundo <BR/>estoy <h1>aprendiendo PHP</h1>";

 //Variables
 $nombre = "Wilson";
 $Nombre = "Ernesto";

 //Concatenacion de cadenas y variables
 echo $nombre."&nbsp;".$Nombre;
 echo("$nombre $Nombre");
 echo('$nombre $Nombre');
 echo "<br/>";

  $num1=5;
  $num2=78;
  $suma= $num1 + $num2;

  echo $suma;
  echo($suma);
  echo "<br/>La variable \$suma tiene el valor de $suma <br/>";

  $modulo = $num2 % 2;
  if ($modulo == 0) {
    echo "El n&uacute;mero ingresado es par";
  }else{
    echo "El numero ingresado es impar";
  }
  echo"<br/>";

  for ($i=0; $i<=10 ; $i++) { 
    echo $i."<br/>";
  }

?>