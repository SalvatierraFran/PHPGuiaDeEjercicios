<?php

	$url = "auto.json";

	$abrir = fopen($url, "r");
	
	while(!feof($abrir))
	{
		$text = fgets($abrir);
	}

	$Final = json_encode($text);

	echo $Final;
?>