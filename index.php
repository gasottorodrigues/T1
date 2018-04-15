<!-- André Calixto Toscano -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/interface.css">
		<link rel="stylesheet" type="text/css" href="css/table.css">
	</head>
	<body>
		<?php include "cabecalho.php"; ?>
		<div class="main-container">
			<div class="table-container">
				<table>
					<?php
					// CRIAÇÃO DA TABELA DE ESTADOS CADASTRADOS
						if(file_exists('xml/estado.xml')){
							echo"<thead>";
								echo"<tr>";
									echo"<th>Sigla</th>";
									echo"<th>Nome do Estado</th>";
								echo"</tr>";
							echo"</thead>";

							$xml = simplexml_load_file('xml/estado.xml');

							echo"<tbody>";
							foreach($xml as $estd){
								echo"<tr>";
								echo"<td>$estd->sigla</td>";
								echo"<td>$estd->estado</td>";
								echo"</tr>";
							}
							echo"</tbody>";
						}else{
							echo"<thead>";
								echo"<tr>";
									echo"<th>Não há estados cadastrados</th>";
								echo"</tr>";
							echo"</thead>";
						}

					?>
				</table>

				<table>
					<?php
					// CRIAÇÃO DA TABELA DE CIDADES
						if(file_exists('xml/cidade.xml')){
							echo"<thead>";
								echo"<tr>";
									echo"<th>Nome da Cidade</th>";
									echo"<th>Estado</th>";
								echo"</tr>";
							echo"</thead>";

							$xml = simplexml_load_file('xml/cidade.xml');

							echo"<tbody>";
							foreach($xml as $cid){
								echo"<tr>";
								echo"<td>$cid->cidade</td>";
								echo"<td>$cid->estado</td>";
								echo"</tr>";
							}
							echo"</tbody>";
						}else{
							echo"<thead>";
								echo"<tr>";
									echo"<th>Não há cidades cadastradas</th>";
								echo"</tr>";
							echo"</thead>";
						}
					?>
				</table>
				
				<table>
					<?php
						if(file_exists('xml/usuario.xml')){
							echo"<thead>";
								echo"<tr>";
									echo"<th>Nome</th>";
									echo"<th>E-mail</th>";
									echo"<th>Sexo</th>";
									echo"<th>Cidade/Estado</th>";
								echo"</tr>";
							echo"</thead>";

							$xml = simplexml_load_file('xml/usuario.xml');

							echo"<tbody>";
							foreach($xml as $user){
								echo"<tr>";
								echo"<td>$user->nome</td>";
								echo"<td>$user->email</td>";
								echo"<td>$user->sexo</td>";
								echo"<td>$user->cidadest</td>";
								echo"</tr>";
							}
							echo"</tbody>";
						}else{
							echo"<thead>";
								echo"<tr>";
									echo"<th>Não há pessoas cadastradas</th>";
								echo"</tr>";
							echo"</thead>";
						}
					?>
				</table>
			</div>
		</div>
	</body>
</html>