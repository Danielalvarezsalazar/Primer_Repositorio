<?php
/* CBTIS 89
P22Array4.php
Programa que almacena datos en un arreglo y posteriormente los imprime.
Angel Daniel Alvarez Salazar
3°A Programacion Matutino */

$equipo = array("portero"=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'rafa');

echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El jugador " . $jugador . "es el " . $posicion;
  echo "<br>","<br>";
}
?>