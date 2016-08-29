<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8"/>
<title>Ejercicio 01</title>
</head>
<body>

<font size=5><p><b>Ejercicio 01</b></p></font>
	
<?php

$acum=0;
$cont=0;

while($acum < 990)
{
	$cont++;
	echo "Se sumó el numero $cont<br>";
	$acum = $acum + $cont;
}

echo "<br>Se sumaron $cont numeros";
echo "<br>El resultado es $acum"
?>

</body>
</html>