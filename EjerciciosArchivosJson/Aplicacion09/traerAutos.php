<?php

	$url = "autos.json";

	$abrir = fopen($url, "r");
	
	while(!feof($abrir))
	{
		$text = fread($abrir, filesize($url));
	}

	$Final = json_encode($text);

	//echo $Final;

	var_dump($Final);

?>