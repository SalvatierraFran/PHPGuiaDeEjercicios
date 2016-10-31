<?php

	if(isset($_REQUEST["txtNum"]))
	{
		$txtNum = $_REQUEST["txtNum"];
		$cont = 0;

		for($i = 0; $i < $txtNum; $i++)
		{
			if(!($i % 2) == 0)
			{
				$cont++;
			}
		}

		echo $cont;
	}

?>