<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>

	<form action="index.php" method="post">		
		Ingrese dirección del archivo: <input type="file" name="txtDire">
		<input type="submit" name="btnEnviar">
	</form>

	<?php	
		
		if(!empty($_POST["txtDire"]))	
		{
			$txtDire = $_POST["txtDire"];
			$txtDireDestino = "misArchivos/2016_09_18_19_15_24.txt";
			$archivo = fopen("Ejemplo.txt", "r");

			if($archivo == NULL)
			{
				echo "Error al abrir archivo";
			}

			while(!feof($archivo))
			{
				$lectura = fgets($archivo);
			}

			$lecturaInvertida = strrev($lectura);

			fclose($archivo);

			$archivoInver = fopen("Ejemplo.txt", "w");

			if($archivo == NULL)
			{
				echo "Error al abrir archivo";
			}

			fwrite($archivoInver, $lecturaInvertida);
			fclose($archivoInver);

			$destino = "destino.txt";

			if(copy($txtDire, $destino))
			{
				echo "Copiado exitoso";
			}
			else
			{
				echo "Error al copiar";
			}
		}
	?>

</body>
</html>