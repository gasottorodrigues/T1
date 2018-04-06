<!-- Gabriel Borges de Moares -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
	</head>
	<body>
		<?php
			include "cabecalho.php";

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$sexo = $_POST["sexo"];
			$cidadest = $_POST["cidade"];

			if(!file_exists('xml/usuario.xml')){
				$xml=
"<?xml version='1.0' encoding = 'utf-8' ?>
<global>
	<user>
		<nome>$nome</nome>
		<email>$email</email>
		<sexo>$sexo</sexo>
		<cidadest>$cidadest</cidadest>
	</user>
</global>
";
			file_put_contents('xml/usuario.xml', $xml);
			}else{

				$xml =simplexml_load_file('xml/usuario.xml');
				$user = $xml->addChild('user');

				$user->addChild('nome', $nome);
				$user->addChild('email', $email);
				$user->addChild('sexo', $sexo);
				$user->addChild('cidadest', $cidadest);

				file_put_contents('xml/usuario.xml', $xml->asXML());
			}
		?>
		<h1>Cadastro de Pessoa Concluído Com Sucesso!</h1>
	</body>
</html>