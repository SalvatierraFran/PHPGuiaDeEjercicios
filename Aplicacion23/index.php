<?php
$Rojo = "red";
$Azul = "blue";
$Verde = "green";
$color;
?>

<?php
	if(isset($_GET["Opciones"])) 
	{
?>
		El color elegido es <?php echo $_GET["Opciones"]; ?>
	<?php 
	}
	?>

	<?php
	if(isset($_GET["Opciones"]))
	{
		$color=$_GET["Opciones"];
	}
	?>

<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body bgcolor="<?php echo $color; ?>">

<form action="index.php" method="get">
<select name="Opciones">
<option value="red">Rojo</option>
<option value="blue">Azul</option>
<option value="green">Verde</option>
</select>
<input type="submit" id="BtnEnviar" value="Enviar">
</form>


</body>
</html>