<html>
<head>
	<script type="text/javascript" src="jquery.js" ></script>
	<script type="text/javascript">
		function Enviar()
		{
			
			/*var arrayJson = [{"numero":"4","nombre":"carlos"}, {"numero":"10","nombre":"ramon"} ];
			arrayJson[0].numero=Valor.value;
			
			alert(arrayJson[0].numero +" - "+ arrayJson[0].nombre);

			var str = JSON.stringify(arrayJson);*/

			
				var destino="traerAutos.php";
				var datoString="JSON";
				var aux= "";
				var asd= null;

				$.ajax({

					type:'get',
					url:destino,
					data: datoString, //son los datos q tengo q pasar 
					async: true,
				})
						
				.done(function(respuesta)
				{
					alert(respuesta);
					//$("#divContenedor").html(respuesta);
					aux= respuesta;
					asd= JSON.parse(aux);
					alert(asd[2].Marca);
					//var aux = JSON.parse(respuesta);
					//alert(aux[0].nombre);
					//var aux= respuesta;
					
				})


			 
				//alert(asd.Marca);  aca no me reconoce la variable!!!!!!!!!
			
			

		}

	</script>

	<title></title>
</head>
<body>
	<input type="text" id="txtValor"/>
	<input type ="button" value="enviar" name="boton" onclick="Enviar()"/> 
	<form >


	</form>

	<div id="divContenedor"></div>

</body>
</html>