<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>>
<body>
	
<?php

$a=6;
$b=9;
$c=9;

if(($a<$b && $a>$c) || ($a>$b && $a<$c))
{
	echo "$a";
}
else if(($b<$a && $b>$c) || ($b>$a && $b<$c))
{
	echo "$b";
}
else if(($c<$a && $c>$b) || ($c>$a && $c<$b))
{
	echo "$c";
}
else
{
	echo "No hay valor del medio";
}

?>

</body>
</html>