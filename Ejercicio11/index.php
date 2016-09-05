<?php

$cont=1;

while($cont<5)
{
	for ($i=1; $i < 5; $i++) 
	{
		$rdo=pow($cont, $i);
		echo "$cont elevado a $i = $rdo<br>";
	}	
	$cont++;
	echo "<br>";
}


?>