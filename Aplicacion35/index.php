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

			$miArchivo = fopen($txtDire, "r");

			copy($txtDire, $txtDireDestino);
			echo "<br>Copiado con éxito";
		}
		else
		{
			echo "<br>No se ha podido copiar";
		}
	?>

</body>
</html>