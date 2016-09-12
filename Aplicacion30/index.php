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
	
	<br><br>
	Cantidad de pasajes <input type="number" name="numPasajes">
	<br><br>
	Efectivo <input type="radio" name="opcion" value="efec"><br>
	Tarjeta de crédito <input type="radio" name="opcion" value="tarj">
	<br><br>
	

	<input type="submit" value="Ver Costo">
</form>

	<?php
		$destino = $_GET["opciones"];
		$valor = $_GET["opcion"];
		$cantPasajes = $_GET["numPasajes"];
		if ($cantPasajes > 2) 
		{
			$desc = ($destino * 35) / 100;
			$totalU = $destino - $desc;
			$totalF = $cantPasajes * $totalU;
	?>
			<br>El costo por unidad con promoción por comprar más de 2 (dos) pasajes es €<?php echo "$totalU"; ?>
			<br>El costo final por el total de pasajes es de €<?php echo "$totalF"; ?>
	<?php
		}
		else if($valor == "efec")
		{
			$desc = ($destino * 12) / 100;
			$totalU = $destino - $desc;
			$totalF = $cantPasajes * $totalU
	?>
			<br>El costo por unidad con promocion por pagar en efectivo es €<?php echo "$totalU"; ?>
			<br>El costo final por el total de pasajes es de €<?php echo "$totalF"; ?>
	<?php
		}
		else
		{
			$desc = ($destino * 7) / 100;
			$totalU = $destino - $desc;
			$totalF = $cantPasajes * $totalU;
	?>
			<br>El costo por unidad con promocion por pagar con tarjeta de crédito es €<?php echo "$totalU"; ?>
			<br>El costo final por el total de pasajes es de €<?php echo "$totalF"; ?>
	<?php
		}
	?>
	<br>
</body>
</html>