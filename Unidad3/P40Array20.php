<?php
/* CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los numeros pares, en el $arreglo2 van los numeros impares, en el $Arreglo3 va la suma de los numeros correspondiente al mismo indice.
Angel Daniel Alvarez Salazar
3°A Programacion Matutino */
echo "CBTIS 89<br>";
echo "Arreglo1  ----- Arreglo2 ----- Arreglo3<br>";
$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();

for ($i = 150; $i <= 200; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i;
        $Arreglo2[] = $i + 1;
    }
}

for ($j = 0; $j < count($Arreglo1); $j++) {
	$Arreglo3[] = $Arreglo1[$j] + $Arreglo2[$j];
    echo "{$Arreglo1[$j]}  ------------- {$Arreglo2[$j]}  ----------- {$Arreglo3[$j]}<br>";
}
?>