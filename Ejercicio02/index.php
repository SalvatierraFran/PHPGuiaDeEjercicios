<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
</head>
<body>
	
<?php

date_default_timezone_set('UTC');

echo date("l");

echo "<br>";

echo date('l jS \of F Y h:i:s A');

echo "<br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo "<br>";

echo date(DATE_RFC2822);

echo "<br>";

echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>

</body>
</html>