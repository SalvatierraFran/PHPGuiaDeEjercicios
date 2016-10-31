<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	
	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fichero">
		<input type="submit" name="btnEnviar" Value="Subir">
	</form>

	<?php

		$alta = isset($_POST["btnEnviar"]) ? TRUE : FALSE;

		if($alta){

			$destino = "Archivos/".$_FILES["fichero"]["name"];

			$uploadOk = FALSE;

			$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

			//Verifico que el archivo no exista
			if(file_exists($destino)){
				$uploadOk = FALSE;

				$Mensaje = "Archivo existente.";

				echo $Mensaje;
			}

			//Verifico el tamaño máximo que permite subir
			if(($tipoArchivo == "doc" || $tipoArchivo == "xdoc") && $_FILES["fichero"]["size"] < 60000){
				$uploadOk = TRUE;

				$Mensaje = "Subido correctamente";

				echo $Mensaje;
			}
			elseif(($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "gif") && $_FILES["fichero"]["size"] < 300000){
				$uploadOk = TRUE;

				$Mensaje = "Subido correctamente";

				echo $Mensaje;
			}
			elseif($_FILES["fichero"]["size"] < 500000){
				$uploadOk = TRUE;

				$Mensaje = "Subido correctamente";

				echo $Mensaje;
			}
			else{
				$uploadOk = FALSE;

				$Mensaje = "No se pudo subir. Revisar.";

				echo $Mensaje;
			}

			if($uploadOk == TRUE){
				if(move_uploaded_file($_FILES["fichero"]["tmp_name"], $destino)){

					$Mensaje = "Movido correctamente";

					echo $Mensaje;
				} 
			}
		}

	?>

</body>
</html>