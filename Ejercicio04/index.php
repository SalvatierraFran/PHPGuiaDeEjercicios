<?php

#Variables
$op1=5;
$op2=4;

$operador=array('+', '-', '*', '/');

for ($i=0; $i < count($operador); $i++) 
{ 
	switch ($i) 
	{
		case '0':
		    $suma=$op1+$op2;
		    echo "Suma: $suma<br>";
			break;

		case '1':
            $resta=$op1-$op2;
            echo "Resta: $resta<br>";
            break;

        case '2':
            $multiplicacion=$op1*$op2;
            echo "Multiplicaion: $multiplicacion<br>";
            break;

        case '3':
            $division=$op1/$op2;
            echo "Division: $division<br>";
		    break;
	}
}

?>