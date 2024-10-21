<?php
/*CBTIS 89
P21Array3.php
Programa que almacena diversos datos en un arreglo y posterioremente los imprime por medio de un ciclo for
Angel Daniel Alvarez Salazar
3°A de Programacion TM*/
$arraynombres = array('Karina','Marco','Rocio','Roberto','Fer','Juan');

//Se obtiene el numero de elementos
$longitud = count($arraynombres);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
}
?>