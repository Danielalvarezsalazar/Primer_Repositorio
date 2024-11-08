<?php
/* Cbtis 89
P39Array19.php
programa que almacena informacion de 6 personas dependiendo de su edad contabiliza en diversos arreglos de acuerdo a las siguientes condiciones: Si la persona es menor de 18 se debe colocar un 1 en el arreglo $grupo1 y en los otros dos colocar un 0. Si la persona tiene entre 18 y 49 años se debe colocar un  1 en el arreglo $grupo2 y en los otros dos colocar un 0 si la persona tiene 50 años o mas se debe colocar un 1 en el arreglo $grupo3, y en los otros dos un 0.
 
 Angel Daniel Alvarez Salazar
 3°A Programacion Matutino */

 $nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
 $edad = array(17,30,71,38,12,58);

$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for ($i = 0; $i < 6; $i++){
    if ($edad[$i] < 18) {
        $grupo1[$i] = 1;
        $grupo3[$i] = 0;
        $grupo2[$i] = 0;
    } elseif ($edad[$i] >= 18 && $edad[$i] <= 49) {
        $grupo1[$i] = 0;
        $grupo2[$i] = 1;
        $grupo3[$i] = 0;
    } elseif ($edad[$i] >= 50) {
        $grupo1[$i] = 0;
        $grupo2[$i] = 0;
        $grupo3[$i] = 1;
    }
}


echo "Nombre - Edad - Grupo1 - Grupo 2 - Grupo 3<br>";
for ($i = 0; $i < 6; $i++) {
	echo $nombre[$i] . " ----- " . $edad[$i] . "--------" . $grupo1[$i] . "-----------" . $grupo2[$i] . "-----------" . $grupo3[$i] . "<br>";
}
?>