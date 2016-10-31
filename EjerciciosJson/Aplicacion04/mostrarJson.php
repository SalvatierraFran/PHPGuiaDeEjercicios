<?php

	$ProductoFinal = json_decode(json_encode($_POST["miProducto"]));

	for($i = 0; $i < 3; $i++)
	{
		echo $ProductoFinal[$i]->CodigoDeProducto."-".$ProductoFinal[$i]->Nombre."-".$ProductoFinal[$i]->Precio;
		echo "<br>";
	}
?>