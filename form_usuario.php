<!-- Gabriel Sotto Rodrigues -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/interface.css">
	</head> 
	<body>

		<?php include "cabecalho.php"; ?>

		<form action="cadastro_usuario.php" method="post">
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" required>
			</p>
			<p>
				<label>E-mail:</label>
				<input type="email" name="email" required>
			</p>

			<p>
				<label>Sexo:</label>
				<input type="radio" name="sexo" value="M" checked>Masculino &nbsp;&nbsp;&nbsp;
				<input type="radio" name="sexo" value="F">Feminino
			</p>

			<p>
				<label>Cidade:</label>
				<select name="cidade">
				<?php
					$semcad = false;
					if(file_exists('xml/estado.xml')){
						$xml = simplexml_load_file('xml/cidade.xml');

						foreach($xml as $cid){
							$cidest = $cid->cidade .'/'. $cid->estado;
							echo "<option value= '$cidest'>$cidest</option>";
						}
					}else{
						echo"<option selected>Não há cidades cadastrados</option>";
						$semcad = true;
					}
				?>
				</select>
			</p>

			<input type="submit" name="envio" value="Cadastrar" <?php if($semcad){ echo"disabled = 'disabled'";} ?> >
		</form>
	</body>
</html>