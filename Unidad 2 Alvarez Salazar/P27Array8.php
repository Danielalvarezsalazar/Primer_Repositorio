<?php
/*CBTIS 89
RETO 1
Programa que crea un array con números del 1 al 100. Después, en un ciclo FOR muestra solo los números pares.
Angel Daniel Alvarez Salazar
3A Programacion T.M
*/
$array = range(1, 100);
echo "Numeros pares del 1 al 100:\n";
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        echo $array[$i] . "\n";
    }
}
?>