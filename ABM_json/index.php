<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>ABM JSON</title>

	<style type="text/css">
	.table{
		border:black 2px solid;
	}
	.filas{
		border-bottom: black 2px solid;
	}
	.fila{
		border:2px black solid;
	}

	</style>

	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		
		function Mostrar()
		{
			var Pagina = "administrarRemeras.php";

			$.ajax({
				url : Pagina,
				type : 'POST',
				dataType : 'json',
				data : {queHago : 'traerRemeras'},
				async : true,
			})
			.done(function (respuesta){

				var tabla = '<table class="table">';
				tabla += '<tr>';
				tabla += '<th>ID</th>';
				tabla += '<th>SLOGAN</th>';
				tabla += '<th>SIZE</th>';
				tabla += '<th>PRICE</th>';
				tabla += '<th>COLOR</th>';
				tabla += '<th>NAME</th>';
				tabla += '<th>LOGO</th>';
				tabla += '<th>COUNTRY</th>';
				tabla += '<th>CITY</th>';
				tabla += '<th>ACCION</th>';

				for(var i = 0; i < respuesta.length; i++)
				{
					tabla += '<tr>';
					tabla += '<td>' + respuesta[i]["id"] + '</td>';
					tabla += '<td>' + respuesta[i]["slogan"] + '</td>';
					tabla += '<td>' + respuesta[i]["size"] + '</td>';
					tabla += '<td>' + respuesta[i]["price"] + '</td>';
					tabla += '<td>' + respuesta[i]["color"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["name"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["logo"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["location"]["country"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["location"]["city"] + '</td>';
					tabla += '<td><a href="#" onclick="Eliminar(' + respuesta[i]["id"] + ')">Eliminar</a></td>';
					tabla += '<td><a href="#" onclick="Modificar(' + respuesta[i]["id"] + ')">Modificar</a></td>';
				}

				tabla += '</table>';

				$("#divContenedor").html(tabla);
			})
			.fail(function (respuesta){
				alert("Error");
			})
		}

		function Filtrar()
		{
			var Pagina = "administrarRemeras.php";
			var Pais = $("#txtFiltrar").val();

			$.ajax({
				url : Pagina,
				type : 'POST',
				dataType : 'json',
				data : {queHago : 'traerRemerasFiltradas',
						datoFiltrado : Pais},
				async : true,
			})
			.done(function (respuesta){

				var tabla = '<table class="table">';
				tabla += '<tr>';
				tabla += '<th>ID</th>';
				tabla += '<th>SLOGAN</th>';
				tabla += '<th>SIZE</th>';
				tabla += '<th>PRICE</th>';
				tabla += '<th>COLOR</th>';
				tabla += '<th>NAME</th>';
				tabla += '<th>LOGO</th>';
				tabla += '<th>COUNTRY</th>';
				tabla += '<th>CITY</th>';

				for(var i = 0; i < respuesta.length; i++)
				{
					tabla += '<tr>';
					tabla += '<td>' + respuesta[i]["id"] + '</td>';
					tabla += '<td>' + respuesta[i]["slogan"] + '</td>';
					tabla += '<td>' + respuesta[i]["size"] + '</td>';
					tabla += '<td>' + respuesta[i]["price"] + '</td>';
					tabla += '<td>' + respuesta[i]["color"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["name"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["logo"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["location"]["country"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["city"] + '</td>';
				}

				tabla += '</table>';
				$("#divContenedor").html(tabla);
			})
			.fail(function (respuesta){
				alert("Error");
			})
		}

		function FiltrarPorCampo()
		{
			var Pagina = "administrarRemeras.php";
			var datoFiltrado = $("#txtFiltrar2").val();
			var Opcion = $("#Opciones").val();

			$.ajax({
				url : Pagina,
				type : 'POST',
				dataType : 'json',
				data : {queHago : 'traerRemerasFiltradasPorCampo',
						datoObtenido : datoFiltrado,
						OpObtenida : Opcion},
				async : true,
			})
			.done(function (respuesta){

				var tabla = '<table class="table">';
				tabla += '<tr>';
				tabla += '<th>ID</th>';
				tabla += '<th>SLOGAN</th>';
				tabla += '<th>SIZE</th>';
				tabla += '<th>PRICE</th>';
				tabla += '<th>COLOR</th>';
				tabla += '<th>NAME</th>';
				tabla += '<th>LOGO</th>';
				tabla += '<th>COUNTRY</th>';
				tabla += '<th>CITY</th>';

				for(var i = 0; i < respuesta.length; i++)
				{
					tabla += '<tr>';
					tabla += '<td>' + respuesta[i]["id"] + '</td>';
					tabla += '<td>' + respuesta[i]["slogan"] + '</td>';
					tabla += '<td>' + respuesta[i]["size"] + '</td>';
					tabla += '<td>' + respuesta[i]["price"] + '</td>';
					tabla += '<td>' + respuesta[i]["color"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["name"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["logo"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["location"]["country"] + '</td>';
					tabla += '<td>' + respuesta[i]["manofacturer"]["city"] + '</td>';
				}

				tabla += '</table>';
				$("#divContenedor").html(tabla);
			})
			.fail(function (resultado){
				alert("Error");
			})
		}

		function Agregar()
		{
			var Pagina = "administrarRemeras.php";

			var ID = $("#_id").val();
			var Slogan = $("#txtSlogan").val();
			var Tamano = $("#txtSize").val();
			var Price = $("#txtPrice").val();
			var Color = $("#txtColor").val();
			var Nombre = $("#txtName").val();
			var Country = $("#txtCountry").val();
			var City = $("#txtCity").val();

			var Logo = "https://robohash.org/authicperferendis.bmp?size=50x50&set=set1";

			var obj = {"id":ID,"slogan":Slogan,"size":Tamano,"price":Price,"color":Color,"manofacturer":{"name":Nombre,"logo":Logo,"location":{"country":Country,"city":City}}}

			$.ajax({
				url : Pagina,
				type : 'POST',
				dataType : 'text',
				data : {queHago : 'agregarRemera',
						obj : obj},
				async : true,
			})
			.done(function (respuesta){
				$("#_id").val("");
				$("#txtSlogan").val("");
				$("#txtSize").val("");
				$("#txtPrice").val("");
				$("#txtColor").val("");
				$("#txtName").val("");
				$("#txtCountry").val("");
				$("#txtCity").val("");

				Mostrar();
			})
			.fail(function (respuesta){
				alert("Error");
			})
		}

		function Eliminar(idRecibido)
		{
			var Pagina = "administrarRemeras.php";

			$.ajax({
				url : Pagina,
				type : 'POST',
				dataType : 'text',
				data : {queHago : 'quitarRemera',
						idReme : idRecibido},
				async : true,
			})
			.done(function (respuesta){
				Mostrar();
			})
			.fail(function (respuesta){
				alert("Error");
			})
		}

		function Modificar(idRecibido)
		{
			var Pagina = "administrarRemeras.php";

			$.ajax({
				url : Pagina,
				type : 'POST',
				data : {queHago : 'traerDatos',
						idReme : idRecibido},
				dataType : 'json',
				async : true,
			})
			.done(function (respuesta){
				$("#_id2").val(respuesta["id"]);
				$("#txtSlogan2").val(respuesta["slogan"]);
				$("#txtSize2").val(respuesta["size"]);
				$("#txtPrice2").val(respuesta["price"]);
				$("#txtColor2").val(respuesta["color"]);
				$("#txtName2").val(respuesta["manofacturer"]["name"]);
				$("#txtCountry2").val(respuesta["manofacturer"]["location"]["country"]);
				$("#txtCity2").val(respuesta["manofacturer"]["location"]["city"]);
				$("input[name=oculto]").val(respuesta["id"]);
			})
		}

		function ModificarObjeto()
		{
			var Pagina = "administrarRemeras.php";

			var ID = $("#_id2").val();
			var Slogan = $("#txtSlogan2").val();
			var Tamano = $("#txtSize2").val();
			var Price = $("#txtPrice2").val();
			var Color = $("#txtColor2").val();
			var Nombre = $("#txtName2").val();
			var Country = $("#txtCountry2").val();
			var City = $("#txtCity2").val();
			var id_remera = $("input[name=oculto]").val();
			var Logo = "https://robohash.org/authicperferendis.bmp?size=50x50&set=set1";

			var obj = {"id":ID,"slogan":Slogan,"size":Tamano,"price":Price,"color":Color,"manofacturer":{"name":Nombre, "logo":Logo,"location":{"country":Country,"city":City}}};

			$.ajax({
				url : Pagina,
				type : 'POST',
				data : {queHago : 'modificarRemera',
						obj : obj,
						idOculto : id_remera},
				dataType : 'text',
				async : true,
			})
			.done(function (respuesta){
				$("#_id2").val("");
				$("#txtSlogan2").val("");
				$("#txtSize2").val("");
				$("#txtPrice2").val("");
				$("#txtColor2").val("");
				$("#txtName2").val("");
				$("#txtCountry2").val("");
				$("#txtCity2").val("");
				$("input[name=oculto]").val("");

				Mostrar();
			})
		}

	</script>
</head>
<body>
	<div>
		---Mostrar Lista---<br>
		<input type="button" value="Mostrar JSON" onclick="Mostrar()">
	</div>

	<div>
		<br>---Filtrar Lista---<br>
		<input type="text" id="txtFiltrar">
		<input type="button" value="Filtrar" onclick="Filtrar()">
	</div>

	<div>
		<br>---Filtrar Lista por Campo---<br>
		<input type="text" id="txtFiltrar2">
		<select id="Opciones">
			<option value="OpTamano">Tamaño</option>
			<option value="OpColor">Color</option>
			<option value="OpPais">Pais</option>
		</select>
		<input type="button" value="Filtrar Por Campo" onclick="FiltrarPorCampo()">
	</div>

	<div>
		<br>---Agregar Elemento---<br>
		ID: <input type="text" id="_id"><br>
		SLOGAN: <input type="text" id="txtSlogan"><br>
		SIZE: <input type="text" id="txtSize"><br>
		PRICE: <input type="text" id="txtPrice"><br>
		COLOR: <input type="text" id="txtColor"><br>
		NAME: <input type="text" id="txtName"><br>
		COUNTRY: <input type="text" id="txtCountry"><br>
		CITY: <input type="text" id="txtCity"><br>
		<input type="button" value="Agregar" onclick="Agregar()">
	</div>

	<div>
		<br>---Modificar Elemento---<br>
		ID: <input type="text" id="_id2"><br>
		SLOGAN: <input type="text" id="txtSlogan2"><br>
		SIZE: <input type="text" id="txtSize2"><br>
		PRICE: <input type="text" id="txtPrice2"><br>
		COLOR: <input type="text" id="txtColor2"><br>
		NAME: <input type="text" id="txtName2"><br>
		COUNTRY: <input type="text" id="txtCountry2"><br>
		CITY: <input type="text" id="txtCity2"><br>
		<input type="hidden" name="oculto">
		<input type="button" value="Modificar" onclick="ModificarObjeto()">
	</div>

	<div id="divContenedor"></div>
</body>
</html>