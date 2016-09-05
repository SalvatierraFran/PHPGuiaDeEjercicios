<?php

include("funcion.php");

$Nombre = "Franco";
$PString = "Parcial";
$Limite = 15;

Validacion($Nombre, $Limite);

if(strcmp($Nombre, "Parcial") == 0 || strcmp($Nombre, "Recuperatorio") == 0 || strcmp($Nombre, "Programacion") == 0)
{
	echo "<br>1";
}
else
{
	echo "<br>0";
}
?>