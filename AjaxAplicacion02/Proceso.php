<?php

	if(isset($_REQUEST["url"]))
	{
		$direccion = $_REQUEST["url"];
		if(file_exists($direccion))
		{
			$archivo = fopen($direccion, "r");
			while(!feof($archivo))
			{
				$text = fgets($archivo);
			}
			echo $text;
		}
		else
		{
			echo 0;
		}
	}

?>