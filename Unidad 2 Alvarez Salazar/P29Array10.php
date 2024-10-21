<?php
/*CBTIS 89
RETO 3
Programa que crea un array con 8 nombres de personas. En una variable $nombre escribe un nombre. Después, crea un ciclo que recorra el array. Si el nombre coincide con el del array mostrar el mensaje que “Este nombre está en el Array”.
Angel Daniel Alvarez Salazar.
3A Programacion T.M
*/
$nombres = array("Juan", "Maria", "Luna", "Ana", "Luis", "Fernanda", "Marlen", "Daniel");
$nombre = "Luis";
echo "\nVerificacion de nombre:\n";
foreach ($nombres as $nombreEnArray) {
    if ($nombre === $nombreEnArray) {
        echo "Este nombre esta en el Array\n";
    }
}
?>