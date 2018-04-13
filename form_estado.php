<!-- Código Feito por Gabriel Sotto Rodrigues -->

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/interface.css">
	</head>

	<body>
		<?php include 'cabecalho.php'; ?>
		<form action="cadastro_estado.php"  method="post">
			<p>
				<label>Sigla:</label>
				<input type="text" name="sigla"  placeholder="AA" maxlength="2" requried >
			</p>
			<p>
				<label>Nome do estado:</label>
				<input type="text" name="estado" required >
			</p>

			<input type="submit" name="envio" value="Cadastrar" >
		</form>
	</body>
</html>