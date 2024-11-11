<?php
/*Angel Daniel Alvarez Salazar
CBTIS 89
3° Programacion Matutino*/
$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20,-30, 21, 50, -73, -7, -10, 8);

$arraypositivos = array();
$arraynegativos = array();
$suma_positivos = 0;
$suma_negativos = 0;

foreach ($arraynumeros as $numero) {
	if ($numero > 0) {
		$arraypositivos[] = $numero;
		$suma_positivos += $numero;
	} else {
		$arraynegativos[] = $numero;
		$suma_negativos += $numero;
	}
}

echo "NUMEROS POSTIVOS: ";
foreach ($arraypositivos as $postivo) {
	echo $postivo . " ";
}
echo "<br>La suma de postivos es: $suma_positivos<br><br>";

echo "NUMEROS NEGATIVOS";
foreach ($arraynegativos as $negativo) {
	echo $negativo . " ";
}
echo "<br>La suma de negativos es: $suma_negativos";
?>