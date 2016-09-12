<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="get">
		Ingrese Password <input type="password" name="IngPass"><br><br>
		Reingrese Password <input type="password" name="IngPass2">
		<br><br>
		<input type="submit" value="Enviar">
	</form>

	<?php
		if((!empty($_GET["IngPass"])) && (!empty($_GET["IngPass2"])))
		{
			$valor = $_GET["IngPass"];
			$valor2 = $_GET["IngPass2"];
		
			if($valor == $valor2)
			{
				header("location:welcome.php");
			}
		}
	?>
</body>
</html>