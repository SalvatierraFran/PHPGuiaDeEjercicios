<?php
$rio = 900;
$punta = 550;
$habana = 1000;
$miami = 1250;
$ibiza = 1500;
?>

<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">	
	<h1>Empresa de Turismo</h1>
</head>
<body>

<form action="index.php" method="get">
	<select name="opciones">
		<option value="900">Rio de Janeiro</option>
		<option value="550">Punta del Este</option>
		<option value="1000">La Habana</option>
		<option value="1250">Miami</option>
		<option value="1500">Ibiza</option>
	</select>

	<input type="submit" value="Ver Costo">
</form>

	<?php
		if (isset($_GET["opciones"]))
		{
			$destino = $_GET["opciones"];
		}
	?>
	<br>
	El costo es de €<?php echo "$destino"; ?>


</body>
</html>