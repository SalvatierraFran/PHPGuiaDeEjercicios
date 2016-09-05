<?php

function Validacion($unString, $max)
{
	if(strlen($unString) > $max)
	{
		echo "Supera el máximo de caracteres permitidos";
	}
	else
	{
		echo "Palabra válida";
	}
}
?>