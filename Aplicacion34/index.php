<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	
	<?php

		$miArchivo = fopen("misArchivos/Palabras.txt", "r");
		$vector;

		while(!(feof($miArchivo)))
		{
			$lectu = fgets($miArchivo);
			$vector = explode(" ", $lectu);
			var_dump($vector);
		}

		$numero = count($vector);

		$cont1 = 0;
		$cont2 = 0;
		$cont3 = 0;
		$cont4 = 0;

		for($i = 0; $i < $numero; $i++)
		{
			if(strlen($vector[$i]) == 1)
			{
				$cont1++;
			}

			if(strlen($vector[$i]) == 2)
			{
				$cont2++;
			}

			if(strlen($vector[$i]) == 3)
			{
				$cont3++;
			}

			if(strlen($vector[$i]) > 4)
			{
				$cont4++;
			}
		}

		$string = "<br><br>Palabras con más de 1 caracter: ".$cont1."<br>".
					"Palabras con más de 2 caracteres: ".$cont2."<br>".
					"Palabras con más de 3 caracteres: ".$cont3."<br>".
					"Palabras con más de 4 caracteres: ".$cont4."<br>";

		echo $string;
		echo "<br>";
	?>
	<table border="3">
		<tr>
			<td>Más de un caracter</td>
			<td><?php echo $cont1; ?></td>
		</tr>

		<tr>
			<td>Más de dos caracteres</td>
			<td><?php echo $cont2; ?></td>
		</tr>

		<tr>
			<td>Más de tres caracteres</td>
			<td><?php echo $cont3; ?></td>
		</tr>

		<tr>
			<td>Más de cuatro caracteres</td>
			<td><?php echo $cont4; ?></td>
		</tr>
	</table>

</body>
</html>