<!-- Gabriel Borges de Moraes -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/interface.css">
	</head>
	<?php

		include "cabecalho.php";

		$sigla = strtoupper($_POST["sigla"]);
		$estado = $_POST["estado"];

		if(!file_exists('xml/estado.xml')){
			$xml = 
"<?xml version='1.0' encoding='utf-8' ?>
<global>
	<estd>
		<sigla>$sigla</sigla>
		<estado>$estado</estado>
	</estd>
</global>
";
		file_put_contents('xml/estado.xml', $xml);
		}else{

			$xml = simplexml_load_file('xml/estado.xml');
			$estd = $xml->addChild('estd');

			$estd->addChild('sigla', $sigla);
			$estd->addChild('estado', $estado);

			file_put_contents('xml/estado.xml', $xml->asXML());
		}
	?>

	<h1>Registro Concluído com sucesso</h1>
	</body>
</html>