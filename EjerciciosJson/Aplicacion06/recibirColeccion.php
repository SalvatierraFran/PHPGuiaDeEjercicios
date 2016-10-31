<?php

$producto = array();
$producto["CodigoDeBarra"] = 9999999;
$producto["Nombre"] = "MacBook Pro";
$producto["Precio"] = 25000;

$producto["CodigoDeBarra"] = 5555555;
$producto["Nombre"] = "Apple iMac";
$producto["Precio"] = 30000;

$objJson = json_encode($producto);

echo $objJson;

?>