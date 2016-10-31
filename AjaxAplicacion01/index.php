<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8">
<title>Aplicacion 02 Ajax</title>

	<script type="text/javascript">
		
	function Enviar()
	{	
		var Valor1 = document.getElementById("txtNum").value;

		if(Valor1 > 0)
		{
			var PeticionHTTP = new XMLHttpRequest();

			PeticionHTTP.open("GET", "Proceso.php?txtNum="+Valor1, true);
			PeticionHTTP.send();
			PeticionHTTP.onreadystatechange = function(){

				if(PeticionHTTP.readyState == 4 && PeticionHTTP.status == 200)
				{
					document.getElementById("Resultado").value = PeticionHTTP.responseText;
				}
			}
		}
		else
		{
			alert("Por favor ingrese un numero positivo");
			return;
		}
	}

	</script>

</head>
<body>

	Ingrese un número positivo
	<input type="text" name="txtNum" id="txtNum">
	<br><br>
	Cantidad de numeros impares
	<input type="text" id="Resultado">
	<br><br>
	<input type="submit" name="btnEnviar" id="btnEnviar" onclick="Enviar()">	
</body>
</html>