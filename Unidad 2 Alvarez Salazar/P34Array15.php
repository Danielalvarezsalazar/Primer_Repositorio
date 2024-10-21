<?php
/* CBTIS 89
P34Array15
Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elementos dentro de un arreglo
Alvarez Salazar Angel Daniel
3A Programacion Turno Matutino
*/

//Almacena datos en un arreglo
$arraydatos = ["Karina", "Rosales", "Orozco"];

//Convierte un array en una cadena de texto
$string = implode(" ", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar
$cadena = "Tercero de programacion matutino";

//convierte una cadena de texto en un array
$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elemtnos del arreglo
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
    echo $array[$i];
    echo "<br>";
}
?>