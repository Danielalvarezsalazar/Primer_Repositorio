<?php
/*CBTIS 89
Programa que almacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimensional llamado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas.*/
$Alumnos = array("Luz, Fer, Leo, Ale");
$Calificaciones = array(6, 7, 7, 5);
array(4, 9, 9, 4, 5, 8, 5, 6);

for($i=0;$i<4;$i++)
   { for ($j=0;$j<4;$j++)
   {echo $Calificaciones[$i][$j]." "; }

         echo "<br>";
    }

?>