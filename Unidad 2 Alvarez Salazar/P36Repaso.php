<?php
/*CBTIS 89
Programa que calcula las calificaciones de estudiantes, utilizando un ciclo for para contar cuanto aprobaron o reprobaron y al final imprime si la mayoria aprobo o reprobo
Angel Daniel Alvarez Salazar
3°A Programacion Turno Matutino
*/
$estudiantes = [
    "Edgar" => 8,
    "Daniel" => 7,
    "Pedro" => 9,
    "Josue" => 6,
    "Miguel" => 8,
    "Pepito" => 5,
    "Tulio" => 5,
];
$totalNotas = 0;
$contadorAprobados = 0;
$contadorReprobados = 0;
$numeroEstudiantes = count($estudiantes);

$nombresEstudiantes = array_keys($estudiantes);

for ($i = 0; $i < $numeroEstudiantes; $i++) {
    $nombreEstudiante = $nombresEstudiantes[$i];
    $notaEstudiante = $estudiantes[$nombreEstudiante];

    echo "Estudiante: $nombreEstudiante, Nota: $notaEstudiante<br>";
    $totalNotas += $notaEstudiante;

    if ($notaEstudiante >= 6) {
        $contadorAprobados++;
    } else {
        $contadorReprobados++;
    }
}

$promedioNotas = $totalNotas / $numeroEstudiantes;

echo "<br> Promedio de la clase: " . number_format($promedioNotas, 2) . "<br>";
echo "Total de estudiantes aprobados: $contadorAprobados<br>";
echo "Total de estudiantes reprobados: $contadorReprobados<br>";

if ($contadorAprobados > $contadorReprobados) {
    echo "La mayoria ha aprobado, felicidades.<br>";
} else {
    echo "La mayoria ha reprobado, esfuercense mas.<br>";
}
?>