<?php
	$queHago = isset($_POST["queHago"]) ? $_POST["queHago"] : NULL;

	switch($queHago)
	{
		case 'traerRemeras':
			$archivo = file_get_contents("remeras.json");
			$remeras = json_encode(json_decode($archivo));

			echo $remeras;
			break;


		case 'traerRemerasFiltradas':
			$datoObtenido = $_POST["datoFiltrado"];

			$archivo = file_get_contents("remeras.json");

			$remeras = json_decode($archivo, true);

			$Final = array();

			for ($i = 0; $i < count($remeras); $i++) { 
				if(strcasecmp($remeras[$i]["manofacturer"]["location"]["country"], $datoObtenido) == 0){
					array_push($Final, $remeras[$i]);
				}
			}

			$remeras = json_encode($Final);
			echo $remeras;
			break;

		case 'traerRemerasFiltradasPorCampo':
			$datoObtenido = $_POST["datoObtenido"];
			$OpcionObtenida = $_POST["OpObtenida"];

			$archivo = file_get_contents("remeras.json");

			$remeras = json_decode($archivo, true);

			$Final = array();

			switch ($OpcionObtenida) {
				case 'OpTamano':
					for ($i=0; $i < count($remeras); $i++) { 
						if (strcasecmp($remeras[$i]["size"], $datoObtenido) == 0) {
							array_push($Final, $remeras[$i]);
						}
					}
					break;

				case 'OpColor':
					for ($i=0; $i < count($remeras); $i++) { 
						if (strcasecmp($remeras[$i]["color"], $datoObtenido) == 0) {
							array_push($Final, $remeras[$i]);
						}
					}
					break;

				case 'OpPais':
					for ($i=0; $i < count($remeras); $i++) { 
						if (strcasecmp($remeras[$i]["manofacturer"]["location"]["country"], $datoObtenido) == 0) {
							array_push($Final, $remeras[$i]);
						}
					}
					break;
			}

			$remeras = json_encode($Final);
			echo $remeras;

			break;

		case 'agregarRemera':
			$objNuevo = $_POST["obj"];

			$archivo = file_get_contents("remeras.json");

			$remeras = json_decode($archivo, true);

			array_push($remeras, $objNuevo);

			$Escritura = fopen("remeras.json", "w");

			$Final = json_encode($remeras);

			fwrite($Escritura, $Final);

			fclose($Escritura);

			echo "Objeto guardado";
			break;

		case 'quitarRemera':
			$idElegido = $_POST["idReme"];

			$archivo = file_get_contents("remeras.json");

			$totalRemes = json_decode($archivo, true);

			for ($i=0; $i < count($totalRemes); $i++) { 
				if ($totalRemes[$i]["id"] == $idElegido) {
					array_splice($totalRemes, $i, 1);
					break;
				}
			}

			$Escritura = fopen("remeras.json", "w");

			$Final = json_encode($totalRemes);

			fwrite($Escritura, $Final);

			fclose($Escritura);

			echo "Se elimino correctamente";

			break;

		case 'traerDatos':
			$idElegido = $_POST["idReme"];

			$archivo = file_get_contents("remeras.json");

			$totalRemes = json_decode($archivo, true);

			$objetoElegido = NULL;

			for ($i=0; $i < count($totalRemes); $i++) { 
				if ($totalRemes[$i]["id"] == $idElegido) {
					$objetoElegido = json_encode($totalRemes[$i]);
					break;
				}
			}

			echo $objetoElegido;
			break;

		case 'modificarRemera':
			$obj = $_POST["obj"];
			$id_oculto = $_POST["idOculto"];

			$objElegido = json_decode(json_encode($obj));

			$archivo = file_get_contents("remeras.json");

			$totalRemes = json_decode($archivo, true);

			for ($i=0; $i < count($totalRemes); $i++) { 
				if ($totalRemes[$i]["id"] == $id_oculto) {
					array_splice($totalRemes, $i, 1, array($obj));
					break;
				}
			}

			$Escritura = fopen("remeras.json", "w");

			$Final = json_encode($totalRemes);

			fwrite($Escritura, $Final);

			fclose($Escritura);
			break;
	}

?>