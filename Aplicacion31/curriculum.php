<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	<h1>Solicitud de empleo recibida:</h1>
	<font size="5">Nombre: <?php echo $_GET["txtNombre"]; ?><br>
	Apellido: <?php echo $_GET["txtApellido"]; ?><br>
	Edad: <?php echo $_GET["numEdad"]; ?><br>
	Dirección: <?php echo $_GET["txtDire"]; ?><br>
	Mail: <?php echo $_GET["mail"]; ?><br>
	Información: <?php echo $_GET["txtarea"]; ?></font>
</body>
</html>