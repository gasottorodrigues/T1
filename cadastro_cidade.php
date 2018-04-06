<!-- Gabriel Borges de Moraes -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cidade Concluído</title>
		<meta charset="utf-8">
	</head>
	<body>

	<?php

		include "cabecalho.php";

		$estado = $_POST["estado"];
		$cidade = $_POST["cidade"];

		if(!file_exists('xml/cidade.xml')){
			$xml = 
"<?xml version='1.0' encoding='utf-8' ?>

<global>
	<cid>
		<estado>$estado</estado>
		<cidade>$cidade</cidade>
	</cid>
</global>
";
		file_put_contents('xml/cidade.xml', $xml);
		}else{

			$xml =simplexml_load_file('xml/cidade.xml');
			$cid = $xml->addChild('cid');

			$cid->addChild('estado', $estado);
			$cid->addChild('cidade', $cidade);

			file_put_contents('xml/cidade.xml', $xml->asXML());
		}

	?>
		<h1>Cidade Cadastra com Sucesso!</h1>
	</body>
</html>