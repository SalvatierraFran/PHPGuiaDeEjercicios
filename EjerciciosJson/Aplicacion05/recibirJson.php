<?php

$producto = new stdClass();
$producto->CodigoDeBarra = 555555;
$producto->Nombre = "Computadora";
$producto->Precio = 150000;

$objJson = json_encode($producto);

echo $objJson;

?>