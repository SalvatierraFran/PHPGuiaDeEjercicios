<?php

#Variables
$MiArray = array();
$acum = 0;

for ($i=0; $i < 5 ; $i++) 
{ 
	$MiArray[$i] = rand(1, 10);
	$acum = $acum + $MiArray[$i];
}

$promedio = $acum / 5;

echo "El promedio es igual a $promedio<br>";

if($promedio == 6)
{
	echo "El promedio es igual a 6<br>";
}
else if($promedio > 6)
{
	echo "El promedio es mayor a 6<br>";
}
else
{
	echo "El promedio es menor a 6<br>";
}
?>