<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">

<title>Aplicacion 38</title>

</head>
<body>
	
<?php

$dir = opendir( 'Fotos' );

while($archivo = readdir($dir)){
	if(!is_dir($archivo)){?>
		<table border=4>
			<tr>
				<td><?php echo "<img src='Fotos/$archivo' alt='$archivo'/>";
					#echo "<br><br>";	?>
			</tr>
		</table>

<?php
	}
}


?>

</body>
</html>
