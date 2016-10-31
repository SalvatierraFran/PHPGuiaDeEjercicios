<?php

	$ProductoFinal = json_decode(json_encode($_POST["miProducto"]));
	echo $ProductoFinal->CodigoDeProducto."-".$ProductoFinal->Nombre."-".$ProductoFinal->Precio;

?>