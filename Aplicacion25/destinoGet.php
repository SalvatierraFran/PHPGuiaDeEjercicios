<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	
	<?php
		if(isset($_GET["numB"]) && isset($_GET["numH"]))
		{
	?>
			La base es <?php echo $_GET["numB"];?>
			y la altura es <?php echo $_GET["numH"]; ?>
			<br>
			La superficie del rectángulo es <?php echo $_GET["numB"]*$_GET["numH"]; ?>
	<?php
		}
	?>

	<form action="index.php" >
		
		<input type="submit" name="btnEnviarInicio" value="Volver">
	</form>

</body>
</html>