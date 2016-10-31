<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
<title>Aplicacion 40</title>
</head>
<body>

	<form method="post" action="index.php" enctype="multipart/form-data">
		<input type="hidden" name="TmñMax" value="30000">
		Enviar este ficher: <input type="file" name="FileUsuario"><br>
		<input type="submit" name="btnEnviar" value="Enviar fichero">	
	</form>

	<?php

	$alta = isset($_POST["btnEnviar"]) ? TRUE : FALSE;

	if($alta)
	{
		$destino = "Fotos/".$_FILES["FileUsuario"]["name"];

		$uploadOk = TRUE;

		$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

		//Verifico que el archivo no exista
		if(file_exists($destino)){
			$uploadOk = FALSE;
			$Mensaje = "El archivo ya existe.";
			echo $Mensaje;
		}

		//Verifico el tamaño máximo que permite subir
		if($_FILES["FileUsuario"]["size"] > 300000){
			$uploadOk = FALSE;
			$Mensaje = "El archivo es demasiado grande.";
			echo $Mensaje;
		}

		//Obtiene el tamaño de una imágen. Si el archivo no es una imágen, retorna false
		$ImagenSI = getimagesize($_FILES["FileUsuario"]["tmp_name"]);

		if($ImagenSI === FALSE){//No es una imagen
			$uploadOk = FALSE;
			$Mensaje = "Solo son permitidas las imágenes";
			echo $Mensaje;
		}
		else{//Es una imagen

			//Solo son permitidas algunas extensiones
			if($tipoArchivo != "jpg" && $tipoArchivo != "jpeg" && $tipoArchivo != "gif" && $tipoArchivo != "png"){
				$uploadOk = FALSE;
				$Mensaje = "Solo son permitidas las imágenes con extensiones JPG, JPEG, GIF y PNG";
				echo $Mensaje;
			}
		}

		//Verifico si hubo algún error
		if($uploadOk === FALSE){
			echo "<br><br>No puedo subir el archivo.";
		}
		else{
			move_uploaded_file($_FILES["FileUsuario"]["tmp_name"], $destino);

			echo "Subido correctamente";
			}
	}

	$dir = opendir( 'Fotos' );

	while($archivo = readdir($dir)){
		if(!is_dir($archivo)){ ?>
			<table border=4>
				<tr>
					<td><?php echo "<img src='Fotos/$archivo' alt='$archivo'/>"; ?>
				</tr>
			</table>
	<?php
		}
	}
	?>
</body>
</html>