<?php
/* CBTIS 89
Programa de fruteria
Angel Daniel Alvarez Salazar
3°A Programacion TM */ 
$fruta=array("manzana"=> "25","mango"=>"40","limon"=>"35","naranja"=>"20");
echo "**FRUTERIA DEL SUR**", "<br>","<br>";
foreach ($fruta as $costo => $frutas)
        {echo"El kilo de " . $costo "cuesta" $frutas;
        echo "<br>","<br>";}
?>