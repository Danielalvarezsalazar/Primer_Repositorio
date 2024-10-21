<?php
/*CBTIS 89
Crea un código donde se den de alta 3 productos: Camisa, Pantalón y Cinturón. Luego muestra el array y por último muestra el array ascendente.
Modifica este código para que se inserten 2 productos más: Una Gorra y unos Calcetines.
Modifica el código para mostrar los productos descendentes.
Alvarez Salazar Angel Daniel
3°A T.M Programacion
*/
$productos = ["Camisa", "Pantalon", "Cinturon"];
echo "Array de productos iniciales: <br>";
foreach ($productos as $producto) {
    echo $producto . "<br>";
}

$productos[] = "Gorra";
$productos[] = "Calcetines";
echo "<br> Array de productos después de añadir Gorra y Calcetines: <br>";
foreach ($productos as $producto) {
    echo $producto . "<br>";
}

sort($productos);
echo "<br> Array de productos en orden ascendente: <br>";
foreach ($productos as $producto) {
    echo $producto . "<br>";
}

sort($productos);
echo "<br> Array de productos en orden descendente: <br>";
foreach ($productos as $producto) {
    echo $producto . "<br>";
}
?>