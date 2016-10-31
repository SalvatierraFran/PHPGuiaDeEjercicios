

<?php

 $url = "autos.json";

 $archivo= fopen($url, "r");

  	$list = NULL;
 while(!feof($archivo))
  {
  	$autosAux= fgets($archivo);
  	//var $cont=0;


  	$list = $list.$autosAux;
  	
  //	$cont++;

 	# code...
 }
 
/* for ($i=0; $i <$list.lenght ; $i++) { 
 	# code...
 	echo $list[$i];
 }*/
 $final= json_decode(json_encode($list));
 //echo $final;
 echo $list;
 	
?>