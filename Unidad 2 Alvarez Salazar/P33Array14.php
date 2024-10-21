<?php
/*CBTIS 89
Programa que pone nombres de manera ascendente y descendente
Alvarez Salazar Angel Daniel
3A Programacion Turno Matutino
*/

$nombres = array("Jose, Daniel, Victor, Manuel, Paolo, Ronaldo");

sort($nombres);
echo"Datos del arreglo ordenados de forma ascendente por medio de un ciclo for <br>";
for ($i = 0; $i < count($nombres); $i++) {
	echo $nombres[$i] . "<br>";
}

array_push($nombres, "Juan, Minerva, Agustin, Zara");

array_splice($nombres, 2, 4);
rsort($nombres);
echo "<br> Datos del arreglo ordenados de forma descendente por medio de un ciclo for <br>";
for ($i = 0; $i < count($nombres); $i++) {
	echo $nombres[$i] . "<br>";
}

echo "<br> El numero de elementos actuales en el arrelo es:<br>" . count($nombres);
?>