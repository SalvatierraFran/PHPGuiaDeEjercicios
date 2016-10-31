<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	<h1>Descuento por Compra</h1>
	- Consumiendo entre $300 y $550 se obtiene un 10% de descuento.	<br>
	- Consumiendo más de $550 se obtiene un 20% de descuent.<br><br>

	<form action="index.php" method="get">
		Importe a pagar: $<input type="number" name="numImporte"><br><br>
		<input type="submit" name="btnEnviar" value="Calcular">
	</form>

	<?php
		$valor = $_GET["numImporte"];
		if($valor > 330 && $valor < 550)
		{
			$desc = ($valor * 10) / 100;
			$final = $valor - $desc;
	?>
			<br>El importe a pagar es <font size="5"><b>$<?php echo $final; ?></b></font>
	<?php			
		}
		else if($valor > 550)
		{
			$desc = ($valor * 20) / 100;
			$final = $valor - $desc;
	?>
			<br>El importe a pagar es <font size="5"><b>$<?php echo $final; ?></b></font>
	<?php
		}
		else
		{
	?>
			<br>El importe a pagar es <font size="5"><b>$<?php echo $valor; ?></b></font>
	<?php
		}
	?>
</body>
</html>