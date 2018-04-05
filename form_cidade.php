<!-- Gabriel Sotto Rodrigues -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php include "cabecalho.php"; ?>

		<form action="cadastro_cidade.php" method="post">
			<p>
				<label>Estado:</label>
				<select name="estado">
				<?php
					$semcad = false;
					if(file_exists('xml/estado.xml')){
						$xml = simplexml_load_file('xml/estado.xml');

						foreach($xml as $estd){
							echo "<option value= '". $estd->sigla ."'>"³ ."</option>";
						}
					}else{
						echo"<option selected>Não há estados Cadastrados</option>";
						$semcad = true;
					}
				?>
				</select>
			</p>

			<p>
				<label>nome da Cidade:</label>
				<input type="text" name="cidade" required >
			</p>

			<input type="submit" name="envio" value="Cadastrar" <?php if($semcad){ echo"disabled = 'disabled'";} ?> >
		</form>
	</body>
</html>