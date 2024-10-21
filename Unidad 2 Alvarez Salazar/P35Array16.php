<?php
/* CBTIS 89
Programa que almacena datos en dos arreglos, posteriormente realiza operaciones entre ellos y coloca los resultados en otros arreglos (Suma, resta, multiplicacion y division),al final imprime el contenido de toso los arreglos.
Alvarez Salazar Angel Daniel
3A Programacion Turno Matutino
*/
$suma; $resta; $multi; $divi;

$array1 = array(10,20,30,40,50);
$array2 = array(3,7,6,15,18);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();

$longitud = count($array1);
for($i=0; $i<$longitud; $i++)
{$arraysuma[$i] = $array1[$i]+$array2[$i];
 $arrayresta[$i] = $array1[$i]-$array2[$i];
 $arraymulti[$i] = $array1[$i]*$array2[$i];
 $arraydivi[$i] = $array1[$i]/$array2[$i];
}

echo "SUMA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." + ".$array2[$i]." = ".$arraysuma[$i];
 echo "<br>";
}
echo "<br>";

echo "RESTA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." - ".$array2[$i]." = ".$arraysuma[$i];
 echo "<br>";
}
echo "<br>";

echo "MULTIPLICACION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." * ".$array2[$i]." = ".$arraysuma[$i];
 echo "<br>";
}
echo "<br>";

echo "DIVISION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." / ".$array2[$i]." = ".$arraysuma[$i];
 echo "<br>";
}
echo "<br>";
/*echo "SUMA";
for ($i=0; $i<count($array1); $i++) {
	echo $array1[$i] + $array2[$i] . " = " . $suma . "<br>";
}
echo "RESTA";
for ($i=0; $i<count($array1); $i++) {
	echo $array1[$i] - $array2[$i] . " = " . $resta . "<br>";
}
echo "MULTIPLICACION";
for ($i=0; $i<count($array1); $i++) {
	echo $array1[$i] * $array2[$i] . " = " . $multi . "<br>";
}
echo "DIVISION";
for ($i=0; $i<count($array1); $i++) {
	echo $array1[$i] / $array2[$i] . " = " . $divi . "<br>";
}
*/
?>
