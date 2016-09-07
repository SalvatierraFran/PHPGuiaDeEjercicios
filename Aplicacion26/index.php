<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	<h1>Superficie del rectángulo - Envío aquí mismo</h1>

	<form action="index.php" method="get">
	Ingrese base <input type="number" name="numBase">
	<br><br>
	Ingrese altura <input type="number" name="numAltura">
	<br><br>
	Ingrese lado <input type="number" name="numLado">
		
	<br><br>
	Superficie <input type="radio" name="superim" value="si" checked="checked"> Perímetro <input type="radio" name="superim" value="no">
	<input type="submit" name="btnEnviar" value="Enviar">

	</form>

	<!--<?php
		if(isset($_GET["numAltura"]) && isset($_GET["numBase"]))
		{
	?>
		<br>La base es <?php echo $_GET["numBase"]; ?>
		y la altura <?php echo $_GET["numAltura"]; ?>
	<?php
		}
	?>-->

	<?php
		$valor = $_GET["superim"];

		if($valor == "no")
		{
			echo "El perímetro del rectángulo es ".$_GET["numLado"]*4;
		}
		else
		{
			echo "La superficie del rectángulo es ".$_GET["numBase"]*$_GET["numAltura"];
		}
	?>

		<!--<br>La superficie es <?php echo $_GET["numBase"]*$_GET["numAltura"]; ?>-->

	<h2>Superficie del rectángulo - Envío a otro destino</h2>

	<form action="destinoGet.php" method="get">
		Ingrese base <input type="number" name="numB">
		<br><br>
		Ingrese altura <input type="number" name="numH">
		<br><br>
		Ingrese lado <input type="number" name="numLado">

		<br><br>
		<input type="radio" name="perisup" value="si">Superficie <input type="radio" name="perisup" value="no">Perímetro
		<input type="submit" name="btnEnviarDestino" value="Enviar a Destino">
	</form>

</body>
</html>